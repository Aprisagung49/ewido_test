<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Newsroom;
use Illuminate\Http\Request;
use App\Models\NewsroomCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NewsroomController extends Controller
{
    public function index(Request $request)
    {

        if ($request->is('admin/*')) {

            // Melakukakn inisialisasi
        $query = Newsroom::query();

        // Membuat sebuah validasi dari sebuah request dari search
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ;
        }
    
        // Melakukan request jika ada request sort
        if ($request->sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

            return view('admin.newsroom.index',[
             'articles' => $query->paginate(6)->withQueryString(),
             'categories' => NewsroomCategory::all()
            ]);
            
        } else {
        return view('users.newsroom.index',[
            'articles' => Newsroom::latest()->paginate(6)->withQueryString(), 
            'categories' => NewsroomCategory::latest()->get()
        ]);
    }
}
    public function filter(NewsroomCategory $category)
    {
    $articles = $category->newsrooms()->latest()->paginate(6)->withQueryString();
    return view('users.newsroom.index', [
        'articles' => $articles,
        'categories' => NewsroomCategory::all(),
    ]);
    }

    public function show(Request $request, Newsroom $newroom)
    {
      
        if (!$newroom) {
            abort(404, 'Newsroom not found');
        }
        if ($request->is('admin/*')) 
        {
            return view('admin.newsroom.show', compact('newroom'));
        } else {
            return view('users.newsroom.show', compact('newroom'));
        }
    }

    public function create(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.newsroom.create', [
                'categories' => Newsroomcategory::all()
            ]);
        } else {
            return view('users.newsroom.create');
        }
    }
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:newsrooms',
            'category_id' => 'required',
            // 'image' => 'image|file|max:1024',
            'files' => 'required|array|max:20',
            'files.*' => 'image|mimes:jpg,jpeg,png,gif|max:20048',
            'body' => 'required'
        ]);


        $uploadedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('newsroom-images', 'public');
                $uploadedFiles[] = $path;
            }
        }

       
        $validateData['user_id'] = Auth::user()->id;
        $validateData['image'] = json_encode($uploadedFiles);

        // dd($validateData);

        Newsroom::create($validateData);

        return redirect('/admin/newsroom')->with('success', 'New Post Has Been added!');
    }
    
    public function destroy(Newsroom $newsroom)
    {

       if ($newsroom->image) {
        $files = json_decode($newsroom->image, true);
        foreach ($files as $file) {
            Storage::disk('public')->delete($file);
        }
    }

        // dd($request);
        Newsroom::destroy($newsroom->id); 
        return redirect('/admin/newsroom')->with('success', 'Post Has Been Deleted!');
        
    }

    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Newsroom::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function edit (Newsroom $newsroom)
    {
        return view('admin.newsroom.edit', [
            'newsroom' => $newsroom,
            'existingImages' => json_decode($newsroom->image, true),
            'categories' => Newsroomcategory::all()]);
    }
public function update(Request $request, Newsroom $newsroom)
{
    $rules = [
        'title' => 'required|max:255',
        'category_id' => 'required',
        'files' => 'sometimes|array|max:20',
        'files.*' => 'image|mimes:jpg,jpeg,png,gif|max:80048',
        'body' => 'required'
    ];

    

    if ($request->slug != $newsroom->slug) {
        $rules['slug'] = 'required|unique:newsrooms';
    }

    $validatedData = $request->validate($rules);

    // Ambil gambar lama yang masih dipertahankan (yang masih tampil di preview)
    $remainingOldImages = json_decode($request->input('remaining_old_images', '[]'), true);
    $oldImages = json_decode($newsroom->image ?? '[]', true);

    // Cari gambar lama yang dihapus, lalu hapus dari storage
    $deletedImages = array_diff($oldImages, $remainingOldImages);
    foreach ($deletedImages as $file) {
        Storage::delete('public/' . $file);
    }

    // Upload file baru jika ada
    $newImages = [];
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $path = $file->store('newsroom-images', 'public');
            $newImages[] = $path;
        }
        // dd($newImages);
    }
    // dd($request->file('files'));
    // Gabungkan gambar lama yang masih ada + gambar baru
    $finalImages = array_merge($remainingOldImages, $newImages);


    // dd([
    //     'remaining' => $remainingOldImages,
    //     'new' => $newImages,
    //     'final' => $finalImages
    // ]);
    // Update data newsroom
    $newsroom->update([
        'title' => $validatedData['title'],
        'slug' => $validatedData['slug'] ?? $newsroom->slug,
        'category_id' => $validatedData['category_id'],
        'body' => $validatedData['body'],
        'image' => json_encode($finalImages),
    ]);

    // dd($newsroom->fresh()->image);
    
    return redirect('/admin/newsroom')->with('success', 'Post Has Been Updated!');
}

}

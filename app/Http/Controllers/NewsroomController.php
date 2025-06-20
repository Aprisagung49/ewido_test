<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newsroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\NewsroomImage;
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

    public function create()
    {
        $categories = NewsroomCategory::all();
        return view('admin.newsroom.create', compact('categories'));
    }

    public function show(Request $request, Newsroom $newsroom)
    {
        $newsroom->load(['category']);
         
        if ($request->is('admin/*')) {
            return view('admin.newsroom.show', compact('newsroom'));
        }
        else{
            $newsroom->load(['category']);
        
    return view('users.newsroom.show', compact('newsroom'));
        }
         

    
    }

    public function store(Request $request)
    {
        $attrs = $request->validate([
            'category_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string']
        ]);

        $attrs['user_id'] = Auth::user()->id;
        $attrs['slug'] = Str::slug($request->title);

        $newsroom = Newsroom::create($attrs);

        // Handle multiple image upload
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $image) {
                $path = $image->store('newsroom-images', 'public'); // storage/app/public/products

                NewsroomImage::create([
                    'newsroom_id' => $newsroom->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect('/admin/newsroom')->with('success', 'Post Has Been Created!');;
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
        'files.*' => 'image|mimes:jpg,jpeg,png|max:20048',
        'body' => 'required'
    ];

    

    if ($request->slug != $newsroom->slug) {
        $rules['slug'] = 'required|unique:newsrooms';
    }

    $validatedData = $request->validate($rules);

    // Ambil gambar lama yang masih dipertahankan (yang masih tampil di preview)
    $remainingOldImages = json_decode($request->input('remaining_old_images', '[]'), true);

    $existingImages = $newsroom->newsroom_images;

    // Hapus gambar lama yang tidak termasuk dalam list `remaining_old_images`
    foreach ($existingImages as $image) {
        if (!in_array($image->image_path, $remainingOldImages)) {
            Storage::delete('public/' . $image->image_path);
            $image->delete();
        }
    }

    // Upload file baru jika ada
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $path = $file->store('newsroom-images', 'public');
            $newsroom->newsroom_images()->create([
                'image_path' => $path,
            ]);
        }
        // dd($newImages);
    }
    // dd($request->file('files'));

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
    ]);

    // dd($newsroom->fresh()->image);
    
    return redirect('/admin/newsroom')->with('success', 'Post Has Been Updated!');
}
}

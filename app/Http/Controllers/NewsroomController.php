<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newsroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\NewsroomImage;
use Illuminate\Validation\Rule;
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
            'body' => ['nullable', 'string']
        ]);

        $slug = Str::slug($request->title);
        $attrs['user_id'] = Auth::user()->id;
        $attrs['slug'] = Str::slug($request->title);

        $newsroom = Newsroom::create($attrs);

        // Handle multiple image upload
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $image) {
                $filename = time() . '-' . $image->getClientOriginalName();
                $path = $image->storeAs("newsroom-images/{$slug}", $filename, 'public');

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
    $validated = $request->validate([
        'title' => 'required|max:255',
        'category_id' => 'required',
        'body' => 'nullable',
        'slug' => [
            'required',
            Rule::unique('newsrooms')->ignore($newsroom->id),
        ],
        'files' => 'sometimes|array|max:20',
        'files.*' => 'image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $slug = $validated['slug']; // Pakai untuk folder upload

    // Update data utama newsroom
    $newsroom->update([
        'title' => $validated['title'],
        'slug' => $slug,
        'category_id' => $validated['category_id'],
        'body' => $validated['body'] ?? '',
    ]);

    // Ambil gambar lama yang masih dipertahankan
    $remainingImages = json_decode($request->input('remaining_old_images', '[]'), true);

    // Hapus gambar lama yang tidak termasuk dalam list `remaining_old_images`
    foreach ($newsroom->newsroom_images as $image) {
        if (!in_array($image->image_path, $remainingImages)) {
            Storage::delete('public/' . $image->image_path);
            $image->delete();
        }
    }

    // Upload gambar baru (jika ada)
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs("newsroom-images/{$slug}", $filename, 'public');

            $newsroom->newsroom_images()->create([
                'image_path' => $path,
            ]);
        }
    }

    return redirect('/admin/newsroom')->with('success', 'Post has been updated!');
}
}

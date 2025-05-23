<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Certificate;
use Illuminate\Support\Str;
use App\Models\ProductGroup;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Services\CustomMailer;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['product_images', 'certificates'])
                ->latest()
                ->when($request->has('group') && $request->group !== 'all', function($query) use ($request) {
                    $query->whereHas('product_group', function($q) use ($request) {
                        $q->where('name', $request->group);
                    });
                })
                ->get();

        // Search products
        if ($request->q) {
            $products = Product::query()
                ->with(['product_images', 'certificates'])
                ->where('type', 'LIKE', '%'.request('q').'%')
                ->orWhere('cable_type', 'LIKE', '%'.request('q').'%')
                ->get();
        }

        if ($request->is('admin/*')) {
            return view('admin.products.index', compact('products'));
        } else {
            return view('users.products.index', compact('products'));
        }
    }


    public function kirim(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'title' => 'required|in:Mr,Mrs,Miss,Ms',
            'first_name' => 'required|string',
            'last_name' =>'required|string',
            'company_name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|string',
            'country' => 'required|string',
            'subject' => 'required|string',
            'product' => 'required|string'
        ]);


        $emailTujuanMap = [
        'Request A Quotation' => 'apris@ewindo.com'
    ];
    
    $subject = $validated['subject'];
    $emailTujuan = $emailTujuanMap[$subject] ?? 'default@example.com';
    // Cari email berdasarkan role yang dipilih
    // Buat isi email, HTML-nya bisa kamu kembangkan sendiri
    $body = "
        <p>Type : <strong>{$validated['subject']}</strong></p>
        <p>From : <strong>{$validated['email']}</strong></p>
        <p>Perusahaan : <strong>{$validated['company_name']}</strong> </p>
        <p>Name : <strong>{$validated['title']}.{$validated['first_name']}{$validated['last_name']}</strong> </p>
        <p>No.Phone : <strong>{$validated['phone']}</strong> </p>
        <p>Country From : <strong>{$validated['country']}</strong> </p>
        <p>Product Order : <strong>{$validated['product']}</strong> </p>
       
        
    ";

    
$body .= "<p>Message:</p><p>" . nl2br(e($validated['message'])) . "</p>";


$success = CustomMailer::send(
        $emailTujuan,
        "Message From Website PT. Ewindo",
        $body,
        'recruitment@ewindo.com',
        'PT. EWINDO CENTER',
        $validated['email'],    // replyTo email user
        $validated['first_name']      // replyTo nama user
    );
    if ($success) {
        return back()->with('success', 'Pesan Berhasil Terkirim, Terima Kasih!');
    } else {
        return back()->with('error', 'Maaf Pesan Gagal Terkirim.');
    }
}

    public function show(Request $request, Product $product)
    {
        $product->load(['product_images', 'certificates']);
        if ($request->is('admin/*')) {
            return view('admin.products.show', compact('product'));
        } else {
            return view('users.products.show', compact('product'));
        }
    }

    public function create(Request $request)
    {
        if ($request->is('admin/*')) {
            $parentGroups = ProductGroup::whereNull('parent_id')->get();
            $childGroups = ProductGroup::whereNotNull('parent_id')->get();

            $certificates = Certificate::all();

            return view('admin.products.create', compact('parentGroups', 'childGroups', 'certificates'));
        } else {
            return view('users.products.create');
        }
    }

    public function store(Request $request)
    {
        $productAttrs = $request->validate([
            'product_group_id' => ['required'],
            'type' => ['required'],
            'cable_type' => ['required'],
            'size' => ['required'],
            'rohs' => ['required'],
            'rated_voltage' => ['required'],
            'rating_voltage' => ['nullable', 'string'],
            'colour' => ['required'],
            'application' => ['required'],
            'product_standard' => ['required'],
            'heat_resistance' => ['required'],
            'test' => ['required', 'string', 'max: 100'],
            'description' => ['nullable', 'string'],
            'images.*' => ['required', File::types(['png', 'jpg', 'jpeg']), 'max:2048'],
            'data_sheet' => ['required', File::types(['pdf']), 'max: 2048']
        ]);

        $productAttrs['slug'] = Str::slug($request->type . '-' . $request->cable_type);
        // $productAttrs['rohs'] = $request->has('rohs');

        // handle document upload
        if ($request->hasFile('data_sheet')) {
            $path = $productAttrs['data_sheet']->store('data_sheet', 'public');
        }

        $productAttrs['data_sheet'] = $path;

        $product = Product::create($productAttrs);

        // Handle multiple image upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public'); // storage/app/public/products

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        if ($request->has('certificates')) {
            $product->certificates()->attach($request->certificates);
        }

        return redirect('/admin/products')->with('success','Product Has Been Added!!!');
    }

    public function destroy(Product $product)
{
    // Hapus semua file gambar yang terkait
    foreach ($product->product_images as $image) {
        Storage::delete('public/' . $image->image_path);
    }
    // Hapus relasi data gambar di database
    $product->product_images()->delete();
    
    $product->delete();

    return redirect('/admin/products')->with('success', 'Product deleted successfully.');
}

public function edit(request $request, $slug) {
    if ($request->is('admin/*')) {
            $parentGroups = ProductGroup::whereNull('parent_id')->get();
            $childGroups = ProductGroup::whereNotNull('parent_id')->get();
            $product = Product::where('slug', $slug)->first();
            $certificates = Certificate::all();
             $selectedCertificates = $product->certificates()->pluck('certificates.id')->toArray();
             $oldImages = json_decode($product->images ?? '[]');
            return view('admin.products.edit', compact('parentGroups', 'childGroups', 'certificates','product','selectedCertificates','oldImages'));
        } else {
            return view('users.products.edit');
        }
}

public function update(Request $request, Product $product )
{

    if ($request->is('admin/*')) {
         $productAttrs = $request->validate([
        'product_group_id' => ['required'],
        'type' => ['required'],
        'cable_type' => ['required'],
        'rohs' => ['required'],
        'size' => ['required'],
        'rated_voltage' => ['required'],
        'rating_voltage' => ['nullable', 'string'],
        'colour' => ['required'],
        'application' => ['required'],
        'product_standard' => ['required'],
        'heat_resistance' => ['required'],
        'test' => ['required', 'string', 'max:100'],
        'description' => ['nullable', 'string'],
        'images.*' => ['nullable', File::types(['png', 'jpg', 'jpeg']), 'max:2048'],
        'data_sheet' => ['nullable', File::types(['pdf']), 'max:2048'],
    ]);

    $productAttrs['slug'] = Str::slug($request->type . '-' . $request->cable_type);
    // $productAttrs['rohs'] = $request->has('rohs');

    // ✅ Update file PDF jika ada file baru diunggah
    if ($request->hasFile('data_sheet')) {
        // Hapus file lama
        if ($product->data_sheet && Storage::disk('public')->exists($product->data_sheet)) {
            Storage::disk('public')->delete($product->data_sheet);
        }

        $productAttrs['data_sheet'] = $request->file('data_sheet')->store('data_sheet', 'public');
    } else {
        // Jika tidak upload file baru, jangan ubah data_sheet
        unset($productAttrs['data_sheet']);
    }

    $product->update($productAttrs);

    // Tambah Gambar Baru

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            if ($image->isValid()) {
                $path = $image->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }
    }

    // ✅ Edit Hapus gambar
    if ($request->filled('deleted_images')) {
    $deletedImageIds = json_decode($request->deleted_images, true);

    foreach ($deletedImageIds as $id) {
        $img = ProductImage::find($id);
        if ($img && Storage::disk('public')->exists($img->image_path)) {
            Storage::disk('public')->delete($img->image_path);
        }
        $img?->delete();
    }
    }

    // ✅ Update sertifikat
    $product->certificates()->sync($request->certificates ?? []);
            return redirect('/admin/products')->with('success', 'Product Has Been Edited!');
        } else {
            return redirect('/users/products');
        }

}
    
}



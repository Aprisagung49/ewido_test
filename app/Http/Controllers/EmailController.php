<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CustomMailer;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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
            'subject' => 'required|in:Contact,Distributor,Supplier,Request A Quotation,Feedback,Other',
        ]);

        if ($request->input('subject') === 'Request A Quotation') {
    $rules['product'] = 'required|exists:products,type';
}


        $emailTujuanMap = [
        'Contact' => 'aprisagungwiresa@gmail.com',
        'Distributor' => 'aprisyupi@gmail.com',
        'Supplier' => 'masterdir6@gmail.com',
        'Request A Quotation' => 'apris@ewindo.com',
        'Feedback' => 'gama@ewindo.com',
        'Other' => 'cindviadealovedbdg@gmail.com',
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
       
        
    ";

    if ($validated['subject'] === 'Request A Quotation') {
    $body .= "<p>Product Order : <strong>{$validated['product']}</strong></p>";
}
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
        return back()->with('success', 'We appreciate you reaching out and will get back to you as soon as possible.');
    } else {
        return back()->with('error', 'Maaf Pesan Gagal Terkirim.');
    }
}

    
    public function index()
    {
        $products = Product::all();
       return view('users.contact.index', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Welcome to Our Company',
            'heroContent' => [
                'heading' => 'Building The Future Together',
                'description' => 'We are committed to delivering innovative solutions for your business needs.'
            ],
            'stats' => [
                ['label' => 'Years Experience', 'value' => '10+'],
                ['label' => 'Projects Completed', 'value' => '500+'],
                ['label' => 'Happy Clients', 'value' => '300+'],
                ['label' => 'Team Members', 'value' => '50+']
            ]
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'content' => [
                'mission' => 'To provide cutting-edge solutions that empower businesses',
                'vision' => 'To become the leading technology partner for businesses worldwide',
                'values' => [
                    'Innovation',
                    'Integrity',
                    'Excellence',
                    'Customer Focus'
                ]
            ]
        ]);
    }

    public function layanan()
    {
        return Inertia::render('Layanan/Layanan', [

        ]);
    }

    public function produk()
    {
        return Inertia::render('Produk/Produk', [

        ]);
    }

    public function produkDetail($id)
    {
        // Contoh data produk berdasarkan ID (nanti bisa diganti dengan database query)
        $produk = [
            'id' => $id,
            'title' => 'Produk ' . $id,
            'description' => 'Deskripsi untuk produk ' . $id,
            'price' => 'Rp ' . (100000 * $id),
            'image' => 'path/to/image.jpg'
        ];

        return Inertia::render('Produk/ProdukDetail', [
            'produk' => $produk
        ]);
    }


    public function tentang()
    {
        return Inertia::render('Tentang/TentangKami', [

        ]);
    }


    public function artikel()
    {
        return Inertia::render('Artikel/Artikel');
    }
    
    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'subject' => 'required|string|max:255'
        ]);

        // Di sini Anda bisa menambahkan logika untuk:
        // 1. Menyimpan pesan ke database
        // 2. Mengirim email notifikasi
        // 3. Dll

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    // public function portfolio()
    // {
    //     return Inertia::render('Portfolio', [
    //         'projects' => [
    //             [
    //                 'title' => 'E-Commerce Platform',
    //                 'description' => 'Built a full-featured online shopping platform',
    //                 'image' => 'portfolio/ecommerce.jpg',
    //                 'category' => 'Web Development'
    //             ],
    //             [
    //                 'title' => 'Mobile Banking App',
    //                 'description' => 'Developed secure mobile banking solution',
    //                 'image' => 'portfolio/banking.jpg',
    //                 'category' => 'Mobile Development'
    //             ],
    //         ]
    //     ]);
    // }
}

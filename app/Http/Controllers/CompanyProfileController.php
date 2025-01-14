<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Produk;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->take(3)->get();
        $artikels = Artikel::latest()->take(3)->get();

        return Inertia::render('Home', [
            'produks' => $produks,
            'artikels' =>  $artikels
        ]);
    }

    public function layanan()
    {
        return Inertia::render('Layanan/Layanan', [

        ]);
    }

    public function tentang()
    {
        return Inertia::render('Tentang/TentangKami', [

        ]);
    }

}

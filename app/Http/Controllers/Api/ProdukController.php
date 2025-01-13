<?php

namespace App\Http\Controllers\Api;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProdukController extends Controller
{
    // Menampilkan semua produk untuk halaman publik
    public function publicIndex()
    {
        $produks = Produk::all(); // Mengambil semua data produk tanpa pagination
        return Inertia::render('Produk/Produk', [
            'produks' => $produks,
        ]);
    }

    // Menampilkan detail produk berdasarkan slug untuk halaman publik
    public function publicShow($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return Inertia::render('Produk/ProdukDetail', [
            'produk' => $produk,
        ]);
    }

    // Menampilkan semua produk (untuk dashboard admin)
    public function index()
    {
        $produks = Produk::latest()->paginate(10); // Data produk dengan pagination
        return Inertia::render('Dashboard/Produk/Index', [
            'produks' => $produks,
        ]);
    }

    // Menampilkan formulir untuk membuat produk baru
    public function create()
    {
        return Inertia::render('Dashboard/Produk/Create');
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:produks,slug',
            'image' => 'required|url',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Produk::create($request->all());

        return redirect()->route('dashboard.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan detail produk di dashboard admin
    public function show($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return Inertia::render('Dashboard/Produk/Show', [
            'produk' => $produk,
        ]);
    }

    // Menampilkan formulir untuk mengedit produk
    public function edit($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        return Inertia::render('Dashboard/Produk/Edit', [
            'produk' => $produk,
        ]);
    }

    // Memperbarui data produk di database
    public function update(Request $request, $slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:produks,slug,' . $produk->id,
            'image' => 'required|url',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $produk->update($request->all());

        return redirect()->route('dashboard.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus data produk dari database
    public function destroy($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();
        $produk->delete();

        return redirect()->route('dashboard.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}

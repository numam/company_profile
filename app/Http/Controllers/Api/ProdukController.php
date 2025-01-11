<?php

namespace App\Http\Controllers\Api;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $produks = Produk::all(); // Ambil semua data produk
        return response()->json($produks); // Kembalikan sebagai JSON
    }

    // Menampilkan detail produk berdasarkan ID
    public function show(Produk $produk)
    {
        return response()->json($produk); // Kembalikan data produk dalam format JSON
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:produks,slug',  // Pastikan unik di tabel 'produks'
            'image' => 'required|url',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $produk = Produk::create($request->all()); // Simpan data produk baru
        return response()->json([
            'message' => 'Produk berhasil ditambahkan.',
            'data' => $produk, // Menampilkan data produk yang baru dibuat
        ]);
    }

    // Memperbarui data produk
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:produks,slug,' . $produk->id, // Pastikan tidak duplikat untuk ID yang sama
            'image' => 'required|url',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $produk->update($request->all()); // Update data produk
        return response()->json([
            'message' => 'Produk berhasil diperbarui.',
            'data' => $produk, // Menampilkan data produk yang telah diperbarui
        ]);
    }

    // Menghapus data produk
    public function destroy(Produk $produk)
    {
        $produk->delete(); // Hapus data produk
        return response()->json([
            'message' => 'Produk berhasil dihapus.'
        ]);
    }
}

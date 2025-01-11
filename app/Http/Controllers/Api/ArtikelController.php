<?php

namespace App\Http\Controllers\Api;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    // public function index()
    // {
    //     $artikels = Artikel::all(); // Ambil semua data artikel
    //     // return response()->json($artikels); // Kembalikan sebagai JSON
    //     return Inertia::render('Dashboard/Artikel/Index'[
    //         'artikels' => $artikels
    //     ]);
    // }

    public function index(Request $request)
    {
        $artikel = app(GetArtikel::class)->execute($request->all());

        return Inertia::render('Dashboard/Artikel/Index', [
            'artikels' => $artikels
        ]); 
    }

    // Menampilkan detail artikel berdasarkan ID
    public function show(Artikel $artikel)
    {
        return response()->json($artikel); // Kembalikan data artikel dalam format JSON
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|unique:artikels,slug',
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'image' => 'required|url', 
            'date' => 'required|date',
        ]);

        $artikel = Artikel::create($request->all()); // Simpan data artikel baru
        return response()->json([
            'message' => 'Artikel berhasil dibuat.',
            'data' => $artikel,  // Menampilkan data artikel yang baru dibuat
        ],);
    }

    // Memperbarui data artikel
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'slug' => 'required|string|unique:artikels,slug',
            'title' => 'sometimes|string|max:255',
            'excerpt' => 'sometimes|string',
            'image' => 'sometimes|url',
            'date' => 'sometimes|date',
        ]);

        $artikel->update($request->all()); // Update data artikel
        return response()->json([
            'message' => 'Artikel berhasil diperbarui.',
            'data' => $artikel,  // Menampilkan data artikel yang telah diperbarui
        ]);
    }

    // Menghapus data artikel
    public function destroy(Artikel $artikel)
    {
        $artikel->delete(); // Hapus data artikel
        return response()->json([
            'message' => 'Artikel berhasil dihapus.'
        ]);
    }
}

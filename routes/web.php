<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\ProdukController;
use Inertia\Inertia;

// Halaman Publik Company Profile
Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/layanan', [CompanyProfileController::class, 'layanan'])->name('layanan');
    Route::get('/produk', [ProdukController::class, 'publicIndex'])->name('produk');
    Route::get('/produk/{slug}', [ProdukController::class, 'publicShow'])->name('produk.detail');
    Route::get('/artikel', [ArtikelController::class, 'publicIndex'])->name('artikel');
    Route::get('/artikel/{slug}', [ArtikelController::class, 'publicShow'])->name('artikel.detail');
    Route::get('/tentang', [CompanyProfileController::class, 'tentang'])->name('tentang');
});

// Halaman yang membutuhkan auth
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Routes untuk dashboard admin artikel dan produk
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/artikel', [ArtikelController::class, 'adminIndex'])->name('artikel.index');
        Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
        Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
        Route::get('/artikel/{slug}', [ArtikelController::class, 'adminShow'])->name('artikel.show');
        Route::get('/artikel/{slug}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
        Route::put('/artikel/{slug}', [ArtikelController::class, 'update'])->name('artikel.update');
        Route::delete('/artikel/{slug}/destroy', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
        Route::get('/artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');

        Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
        Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('produk.show');
        Route::get('/produk/{slug}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
        Route::put('/produk/{slug}', [ProdukController::class, 'update'])->name('produk.update');
        Route::delete('/produk/{slug}/destroy', [ProdukController::class, 'destroy'])->name('produk.destroy');
    });

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

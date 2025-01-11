<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtikelController;


use Inertia\Inertia;

// Halaman Publik Company Profile
Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/layanan', [CompanyProfileController::class, 'layanan'])->name('layanan');
    Route::get('/produk', [CompanyProfileController::class, 'produk'])->name('produk');
    Route::get('/produk/{slug}', [CompanyProfileController::class, 'produkDetail'])->name('produk.detail');
    Route::get('/artikel', [CompanyProfileController::class, 'artikel'])->name('artikel');
    Route::get('/artikel/{slug}', [CompanyProfileController::class, 'artikelDetail'])->name('artikel.detail');
    Route::get('/tentang', [CompanyProfileController::class, 'tentang'])->name('tentang');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'submitContact')->name('contact.submit');
});

// Halaman yang membutuhkan auth
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::prefix('artikel')->group(function (){
        Route::get('/', [ArtikelController::class, 'index'])->name('artikel.index');
    });

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

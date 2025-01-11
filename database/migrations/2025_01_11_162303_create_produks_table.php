<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('slug')->unique(); // Slug produk untuk URL
            $table->string('title'); // Nama produk
            $table->string('image'); // URL gambar produk
            $table->string('price'); // Harga produk
            $table->text('description'); // Deskripsi produk
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};

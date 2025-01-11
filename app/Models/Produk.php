<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /**
     * Nama tabel database terkait.
     */
    protected $table = 'produks';

    /**
     * Kolom yang dapat diisi (mass assignable).
     */
    protected $fillable = [
        'slug',
        'title',
        'image',
        'price',
        'description',
    ];
}

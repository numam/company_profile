<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model ini.
     */
    protected $table = 'artikels';

    /**
     * Kolom yang dapat diisi (mass assignable).
     */
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content',
        'image',
        'date',
    ];
}

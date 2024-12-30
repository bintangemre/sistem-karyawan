<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'goal',
        'phone',
        'image',
    ];

    // Jika perlu, tambahkan relasi atau metode lain
}
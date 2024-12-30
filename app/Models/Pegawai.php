<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // Menambahkan kolom yang boleh diisi (fillable)
    protected $fillable = [
        'nama',      // Kolom nama
        'email',     // Kolom email
        'jabatan',   // Kolom jabatan
        'gaji',      // Kolom gaji
        'telepon',   // Telepon
        'alamat',    // Kolom alamat
    ];

    // Relasi ke Kehadiran
    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }

    // Relasi ke Gaji
    public function gaji()
    {
        return $this->hasMany(Gaji::class);
    }
}
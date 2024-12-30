<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    // Menambahkan kolom ke fillable untuk mass assignment
    protected $fillable = [
        'pegawai_id',  // Kolom pegawai_id untuk relasi
        'tanggal',     // Kolom tanggal kehadiran
        'status',       // Kolom status hadir
    ];

    // Relasi dengan model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
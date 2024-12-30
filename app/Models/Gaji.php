<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    // Mengubah kolom yang dapat diisi massal
    protected $fillable = [
        'pegawai_id',
        'gaji_pokok',
        'tunjangan',
        'potongan',
        'total_gaji',
    ];

    /**
     * Relasi dengan model Pegawai.
     * Setiap gaji terkait dengan satu pegawai.
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    /**
     * Menghitung total gaji otomatis sebelum menyimpan ke database.
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->total_gaji = max(0, $model->gaji_pokok + $model->tunjangan - $model->potongan);
        });
    }
}
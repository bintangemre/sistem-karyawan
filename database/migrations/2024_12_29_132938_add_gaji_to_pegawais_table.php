<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGajiToPegawaisTable extends Migration
{
    /**
     * Menjalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->decimal('gaji', 15, 2);  // Menambahkan kolom gaji dengan tipe decimal
        });
    }

    /**
     * Membatalkan migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->dropColumn('gaji');  // Menghapus kolom gaji jika rollback
        });
    }
}

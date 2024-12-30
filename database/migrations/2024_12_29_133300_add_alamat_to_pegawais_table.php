<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlamatToPegawaisTable extends Migration
{
    /**
     * Menjalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->string('alamat');  // Menambahkan kolom alamat dengan tipe string
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
            $table->dropColumn('alamat');  // Menghapus kolom alamat jika rollback
        });
    }
}

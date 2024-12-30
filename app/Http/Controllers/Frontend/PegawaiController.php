<?php

// app/Http/Controllers/PegawaiController.php

namespace App\Http\Controllers\Frontend;


use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        // Mengambil semua data pegawai dari database
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    // Menampilkan form untuk membuat pegawai baru
    public function create()
    {
        return view('pegawai.create');
    }

    // Menyimpan pegawai baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jabatan' => 'required',
        ]);

        // Menyimpan data pegawai
        Pegawai::create($request->all());

        return redirect()->route('pegawai.index');
    }

    // Menampilkan detail pegawai
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    // Menampilkan form untuk mengedit pegawai
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    // Mengupdate pegawai yang ada di database
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jabatan' => 'required',
        ]);

        // Mengupdate data pegawai
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index');
    }

    // Menghapus pegawai dari database
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}


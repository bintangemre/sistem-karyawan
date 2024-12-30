<?php

// app/Http/Controllers/KehadiranController.php

namespace App\Http\Controllers;

use App\Models\Kehadiran;

class KehadiranController extends Controller
{
    public function index()
    {
        $kehadirans = Kehadiran::with('pegawai')->get();
        return view('pegawai.index', compact('kehadirans'));
    }
}


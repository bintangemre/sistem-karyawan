<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() 
    {
        $portfolioData = Portfolio::all();  // Mengambil semua data  

    return view('welcome', compact('portfolioData'));  

        // Cek jika data tidak ditemukan  
        if (!$portfolioData) {
            // Tangani kasus ketika tidak ada data  
            // Misalnya, Anda bisa mengalihkan pengguna atau menampilkan pesan  
            return view('welcome')->with('message', 'Tidak ada data merek pribadi ditemukan.');
        }

        return view('welcome', compact('portfolioData'));
    }
}
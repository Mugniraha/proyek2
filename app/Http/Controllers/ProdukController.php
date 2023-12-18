<?php

namespace App\Http\Controllers;
use App\Models\galeri;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $dataGaleri = galeri::all(); // Mengambil semua data dari tabel galeris

        return view('produk.index', ['dataGaleri' => $dataGaleri]);
    }
    public function order(Request $request, $id_galeri)
    {
        // Lakukan apa yang diperlukan dengan $id_galeri yang diterima
        // Contoh: Redirect ke halaman costumproduk dengan menyertakan id_galeri
        return redirect()->route('costumproduk.index', ['id_galeri' => $id_galeri]);
    }
}



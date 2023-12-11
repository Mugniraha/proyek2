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
}

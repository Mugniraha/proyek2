<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Perbaikan pada namespace yang diimpor

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $dataProduk = produk::all(); // Perbaikan penulisan nama class dan variabel

        return view('produk.index', ['dataProduk' => $dataProduk]); // Mengirim data ke view dengan nama 'dataProduk'
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $dataProduk = produk::all(); // Mengambil semua data dari tabel galeris

        return view('wishlist.index', ['dataProduk' => $dataProduk]);
    }
}

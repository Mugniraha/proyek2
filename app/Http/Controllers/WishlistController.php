<?php

namespace App\Http\Controllers;
use App\Models\galeri;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $dataGaleri = galeri::all(); // Mengambil semua data dari tabel galeris

        return view('wishlist.index', ['dataGaleri' => $dataGaleri]);
    }
}

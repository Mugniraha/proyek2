<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPesananController extends Controller
{
    public function index()
    {
        return view('daftarpesanan.index'); // Menampilkan view daftarpesanan
    }
    public function riwayat()
    {
        return view('daftarpesanan.riwayat'); 
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; // Pastikan untuk mengimpor model Pesanan dan model lain jika diperlukan


class DaftarPesananController extends Controller
{
    public function index()
    {
        $dataPesanan = Pesanan::all();
        return view('daftarpesanan.index', ['dataPesanan' => $dataPesanan]);
    } // Menampilkan view daftarpesanan
    public function show($idPesanan)
    {
        $pesanan = Pesanan::find($idPesanan);
        return view('daftarpesanan.index', compact('pesanan'));
    }
    public function riwayat()
    {
        return view('daftarpesanan.riwayat');
    }

    public function riwayatService()
    {
        return view('daftarpesanan.riwayatService');
    }
}

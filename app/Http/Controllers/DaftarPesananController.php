<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\Formjs;
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
        $dataPesanan = Pesanan::all();
        return view('daftarpesanan.riwayat', ['dataPesanan' => $dataPesanan]);
    }

    public function riwayatService()
    {
        $dataService = Formjs::all();
        return view('daftarpesanan.riwayatService', ['dataService' => $dataService]);
    }

    public function riwayatServiceshow($idJasa)
    {
        $service = Formjs::find($idJasa);
        return view('daftarpesanan.riwayatService', compact('service'));
    }

}

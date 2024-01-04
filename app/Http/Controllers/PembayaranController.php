<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Bahan;
use App\Models\Pengiriman;

class PembayaranController extends Controller
{
    public function showData($idPesanan, $idProduk, $idPengiriman, $idBahan) {
        try {
            $pesanan = Pesanan::findOrFail($idPesanan);
            $produk = Produk::findOrFail($idProduk);
            $pengiriman = Pengiriman::findOrFail($idPengiriman);
            $bahan = Bahan::findOrFail($idBahan);

            return view('pembayaran.index', compact('pesanan', 'produk', 'pengiriman', 'bahan'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function transaksi($idPesanan)
    {
        $pesanan = Pesanan::find($idPesanan);
        return view('pembayaran.transaksi', compact('pesanan'));
    }
        // Menampilkan view daftarpesanan
}

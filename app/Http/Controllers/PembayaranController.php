<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Bahan;
use App\Models\Pengiriman;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request){
        // $this->validate($request, [
        //     'metodePembayaran'   => 'required',
        //     'idPesanan'          => 'required',
        //     'buktiPembayaran'    => 'required|image|mimes:png,jpg,jpeg|max:2048',
        // ]);

        $img = $request->file('buktiPembayaran');
        $img->storeAs('public/img',$img->hashName());
        // Proses insert
        DB::table('pembayaran')->insert([
            'metodePembayaran'  => $request->metodePembayaran,
            'idPesanan'         => $request->idPesanan,
            'buktiPembayaran'   => $img->hashName(),
        ]);

        // Mengambil data dari request
        // $idPesanan = $request->input('idPesanan');
        // $buktiPembayaran = $request->input('buktiPembayaran');
        // $metodePembayaran = $request->input('metodePembayaran'); // Diambil dari form sebelumnya

        // $pembayaran = new Pembayaran();
        // $pembayaran->idPesanan = $idPesanan;
        // $pembayaran->buktiPembayaran = $buktiPembayaran;
        // $pembayaran->metodePembayaran = $metodePembayaran;

        // $pembayaran->save();

        return redirect()->route('daftarpesanan.index',['idPesanan' => $request->idPesanan])->with('success', 'Data Berhasil Disimpan');
    }
}
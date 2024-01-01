<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Carbon\Carbon;
use App\Models\Costumbarang;
use App\Models\Bahan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CostumProdukController extends Controller
{
    public function index()
    { 
        $dataProduk = produk::all(); // Mengambil semua data dari tabel galeris

        return view('costumproduk.index', ['dataProduk' => $dataProduk]);
    }
    public function show($idProduk)
    {
        $produk = Produk::find($idProduk);
        return view('costumproduk.index', compact('produk'));
    }
    public function payment()
    {
        // Implementasi method payment
        // Misalnya, kembalikan view untuk halaman pembayaran
        return view('costumproduk.payment');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaProduk' => 'required',
            'pilihan_bahan' => 'required',
            'pilihan_warna' => 'required',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'jumlahItem' => 'required|numeric',
            'pengiriman' => 'required',
            'deskripsi' => 'nullable',
        ]);
        $namaPesanan = $request->input('namaProduk');
        $warna = $request->input('pilihan_warna');
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');
        $jumlahItem = $request->input('jumlahItem');
        $metodePengiriman = $request->input('pengiriman');
        $bahan = $request->input('pilihan_bahan');
        $tanggalPemesanan = Carbon::now();
        $idUser = Auth::id();

        $hargaBahan = Bahan::where('idBahan', $bahan)->first()->harga;

        // Hitung harga total berdasarkan panjang, lebar, tinggi, jumlah item, dan harga bahan
        $hargaTotal = ($panjang + $lebar + $tinggi * $hargaBahan) * $jumlahItem;
    
        // Logika penambahan harga tambahan jika panjang, lebar, dan tinggi lebih dari kelipatan 100
        $tambahanHarga = 0;
        if ($panjang % 100 == 0) {
            $tambahanHarga += ($hargaBahan * 2);
        }
        if ($lebar % 100 == 0) {
            $tambahanHarga += ($hargaBahan * 2);
        }
        if ($tinggi % 100 == 0) {
            $tambahanHarga += ($hargaBahan * 2);
        }
        // Lanjutkan logika kelipatan 100 sesuai kebutuhan aplikasi Anda
    
        // Tambahkan harga tambahan ke harga total
        $hargaTotal += $tambahanHarga;
    
        $idPesanan = substr(uniqid(), -8); // Membuat idPesanan dengan 8 karakter random
        
    
        $costumbarang = new Costumbarang();
        $costumbarang->idPesanan = $idPesanan;
        $costumbarang->namaPesanan = $namaPesanan;
        $costumbarang->idUser = $idUser;
        $costumbarang->bahan = $bahan;
        $costumbarang->warna = $warna;
        $costumbarang->panjang = $panjang;
        $costumbarang->lebar = $lebar;
        $costumbarang->tinggi = $tinggi;
        $costumbarang->jumlahItem = $jumlahItem;
        $costumbarang->tanggalPemesanan = $tanggalPemesanan;
        $costumbarang->metodePengiriman = $metodePengiriman;
        $costumbarang->deskripsiPesanan = $request->input('deskripsi');
        $costumbarang->totalHarga = $hargaTotal;
    
        $costumbarang->save();
    
        return redirect()->route('costumproduk.payment')->with('success', 'Data Berhasil Disimpan');
    }
    
}

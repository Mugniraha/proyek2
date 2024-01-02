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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pilihan_bahan' => 'required',
            'pilihan_warna' => 'required',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'jumlahItem' => 'required|numeric',
            'pengiriman' => 'required',
            'deskripsi' => 'nullable',
        ]);
    
        // Mengambil data dari request
        $namaPesanan = $request->input('namaPesanan'); // Diambil dari form sebelumnya
        $warna = $request->input('pilihan_warna');
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');
        $jumlahItem = $request->input('jumlahItem');
        $metodePengiriman = $request->input('pengiriman');
        $idBahan = $request->input('pilihan_bahan');
        $tanggalPemesanan = Carbon::now();
        $idUser = Auth::id();
    
        // Mendapatkan harga bahan dari database berdasarkan pilihan bahan
        $hargaBahan = Bahan::where('idBahan', $idBahan)->value('hargaBahan');

    // Logika penghitungan harga berdasarkan panjang, lebar, tinggi, dan harga bahan
    $hargaPanjang = ceil($panjang / 100); // Menentukan harga panjang berdasarkan kondisi kelipatan
    $hargaLebar = ceil($lebar / 100); // Menentukan harga lebar berdasarkan kondisi kelipatan
    $hargaTinggi = ceil($tinggi / 100); // Menentukan harga tinggi berdasarkan kondisi kelipatan

    // Mendapatkan biaya pengiriman dari tabel 'pengiriman' berdasarkan idPengiriman yang dipilih
    $biayaPengiriman = Pengiriman::where('idPengiriman', $idPengiriman)->value('biayaPengiriman');

    // Menghitung total harga sesuai dengan logika yang dijelaskan
    $totalHarga = ($hargaBahan + ($hargaBahan * $hargaPanjang * $hargaLebar * $hargaTinggi) + $biayaPengiriman) * $jumlahItem;
    
        // Membuat idPesanan dengan 8 karakter random
        $idPesanan = substr(uniqid(), -8);
    
        // Menyimpan data ke dalam model Costumbarang
        $costumbarang = new Costumbarang();
        $costumbarang->idPesanan = $idPesanan;
        $costumbarang->namaPesanan = $namaPesanan;
        $costumbarang->idUser = $idUser;
        $costumbarang->idBahan = $idBahan;
        $costumbarang->warna = $warna;
        $costumbarang->panjang = $panjang;
        $costumbarang->lebar = $lebar;
        $costumbarang->tinggi = $tinggi;
        $costumbarang->jumlahItem = $jumlahItem;
        $costumbarang->tanggalPemesanan = $tanggalPemesanan;
        $costumbarang->metodePengiriman = $metodePengiriman;
        $costumbarang->deskripsiPesanan = $request->input('deskripsi');
        $costumbarang->totalHarga = $totalHarga;
    
        $costumbarang->save();
    
        // Redirect ke halaman pembayaran dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Data Berhasil Disimpan');
    }
    
}

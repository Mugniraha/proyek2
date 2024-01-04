<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\Bahan;
use App\Models\Pengiriman;
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
            'pilihan_bahan' => 'required|numeric', // Contoh validasi untuk pilihan bahan yang harus berupa angka
            'pilihan_warna' => 'required|string', // Validasi untuk pilihan warna yang harus berupa string
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'jumlahItem' => 'required|numeric',
            'pengiriman' => 'required|numeric',
            'deskripsi' => 'nullable|string', // Deskripsi boleh kosong atau berupa string
        ]);

        // Mengambil data dari request
        $namaPesanan = $request->input('namaPesanan'); // Diambil dari form sebelumnya
        $warna = $request->input('pilihan_warna');
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');
        $jumlahItem = $request->input('jumlahItem');
        $idPengiriman = $request->input('pengiriman');
        $idBahan = $request->input('pilihan_bahan');
        $hargaProduk = $request->input('totalharga');
        $idProduk = $request->input('idProduk');
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
        $totalHarga = ($hargaProduk + ($hargaBahan * $hargaPanjang * $hargaLebar * $hargaTinggi) + $biayaPengiriman) * $jumlahItem;

        // Membuat idPesanan dengan 8 karakter random
        $idPesanan = substr(uniqid(), -8);

        // Menyimpan data ke dalam model Costumbarang
        $pesanan = new Pesanan();
        $pesanan->idPesanan = $idPesanan;
        $pesanan->namaPesanan = $namaPesanan;
        $pesanan->idUser = $idUser;
        $pesanan->bahan = $idBahan;
        $pesanan->warna = $warna;
        $pesanan->panjang = $panjang;
        $pesanan->lebar = $lebar;
        $pesanan->tinggi = $tinggi;
        $pesanan->jumlahItem = $jumlahItem;
        $pesanan->tanggalPemesanan = $tanggalPemesanan;
        $pesanan->metodePengiriman = $idPengiriman;
        $pesanan->deskripsiPesanan = $request->input('deskripsi');
        $pesanan->totalHarga = $totalHarga;


        $pesanan->save();
        // Redirect ke halaman pembayaran dengan pesan sukses
        return redirect()->route('pembayaran.index',['idPesanan' => $idPesanan,'idProduk' => $idProduk, 'idBahan' => $idBahan,'idPengiriman' => $idPengiriman ])->with('success', 'Data Berhasil Disimpan');
    }

}

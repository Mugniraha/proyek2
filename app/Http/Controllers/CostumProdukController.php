<?php

namespace App\Http\Controllers;
use App\Models\galeri;
use App\Models\Costumbarang;

use Illuminate\Http\Request;

class CostumProdukController extends Controller
{
    public function index()
    { 
        $dataGaleri = galeri::all(); // Mengambil semua data dari tabel galeris

        return view('costumproduk.index', ['dataGaleri' => $dataGaleri]);
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
            'pilihan_bahan' => 'required', // Ubah nama validasi sesuai dengan name pada form
            'pilihan_warna' => 'required',
            'panjang' => 'required|numeric', // Sesuaikan dengan input yang diperlukan
            'lebar' => 'required|numeric', // Sesuaikan dengan input yang diperlukan
            'tinggi' => 'required|numeric', // Sesuaikan dengan input yang diperlukan
            'jumlah_pesanan' => 'required|numeric', // Sesuaikan dengan input yang diperlukan
            'pengiriman' => 'required', // Sesuaikan dengan input yang diperlukan
            'deskripsi' => 'nullable',
        ]);

        $costumbarang = new Costumbarang();
        $costumbarang->bahan = $request->input('pilihan_bahan'); // Ubah menjadi 'pilihan_bahan' sesuai dengan name pada form
        $costumbarang->warna = $request->input('pilihan_warna');
        $costumbarang->panjang = $request->input('panjang');
        $costumbarang->lebar = $request->input('lebar');
        $costumbarang->tinggi = $request->input('tinggi');
        $costumbarang->jumlah_pesanan = $request->input('jumlah_pesanan');
        $costumbarang->metode_pengiriman = $request->input('pengiriman');
        $costumbarang->keterangan_tambahan = $request->input('deskripsi');

        $costumbarang->save();
        return redirect()->route('costumproduk.payment')->with('success', 'Data Berhasil Disimpan');
    }

}

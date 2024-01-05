<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Perbaikan pada namespace yang diimpor

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $dataProduk = produk::all(); // Perbaikan penulisan nama class dan variabel

        return view('produk.index', ['dataProduk' => $dataProduk]); // Mengirim data ke view dengan nama 'dataProduk'
    }
    public function show($idProduk)
    {
        $produk = Produk::find($idProduk);
        return view('costumproduk.index', compact('produk'));
    }
    public function store(Request $request, $idProduk){
        // Mengambil data dari request
        $wishlistValue = $request->input('wishlist');

    // Simpan data ke dalam tabel produk berdasarkan ID produk
        $produk = Produk::findOrFail($idProduk);
        $produk->wishlist = $wishlistValue;
        $produk->save();
    
        // Redirect atau lakukan tindakan lain setelah penyimpanan berhasil
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Disimpan');
    }
}

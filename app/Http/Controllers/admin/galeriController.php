<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "galeri";
        $galeri = DB::table('galeris')->get();
        return view('admin_konten.galeri', compact('slug','galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi
        $this->validate($request, [
            'gambar'         => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi_galeri' => 'required',
            'harga'          => 'required',
        ]);

        $img = $request->file('gambar');
        $img->storeAs('public/img',$img->hashName());
        // Proses insert
        DB::table('galeris')->insert([
            'gambar' => $img->hashName(),
            'deskripsi_galeri' => $request->deskripsi_galeri,
            'harga'          => $request->harga,
        ]);

        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi
        $this->validate($request, [
            'deskripsi_galeri' => 'required',
            'harga' => 'required',
        ]);
        // Proses update jika tidak ada file gambar baru
        DB::table('galeris')->where('id_galeri', $id)->update([
            'deskripsi_galeri' => $request->deskripsi_galeri,
            'harga' => $request->harga,
        ]);
        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Data Berhasil ditambah']);
    }

    public function updateGambar(Request $request, string $id)
    {
        // Validasi
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Ambil gambar baru
        $img = $request->file('gambar');

        // Jika ada gambar baru
        if ($img) {
            // Generate nama baru menggunakan hashName
            $newFileName = $img->hashName();

            // Simpan gambar baru
            $img->storeAs('public/img', $newFileName);

            // Hapus gambar lama jika sudah ada
            $oldFileName = DB::table('galeris')->where('id_galeri', $id)->value('gambar');
            Storage::delete('public/img/' . $oldFileName);

            // Proses update
            DB::table('galeris')->where('id_galeri', $id)->update([
                'gambar' => $newFileName,
            ]);
        }

        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Gambar Berhasil diperbarui']);
    }


    public function destroy(string $id)
    {
        // untuk mendapatkan gambar sesuai id
        $fileName = DB::table('galeris')->where('id_galeri', $id)->value('gambar');

        // Untuk hapus gambar dari folder public/img
        Storage::delete('public/img/' . $fileName);

        // Untuk hapus gambar di database
        DB::table('galeris')->where('id_galeri', $id)->delete();

        return redirect('/galeri')->with(['success' => 'Data Berhasil dihapus']);
    }

}

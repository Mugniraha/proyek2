<?php

namespace App\Http\Controllers;

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
        $galeri = $galeri = DB::table('galeris')->get();;
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
        return redirect()->route('admin_konten.galeri')->with(['success' => 'Data Berhasil ditambah']);
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
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi_galeri' => 'required',
            'harga' => 'required',
        ]);
    
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $newFileName = $img->hashName(); // Menggunakan hashName sebagai nama baru
            $img->storeAs('public/img', $newFileName);
    
            // Hapus gambar lama jika sudah ada
            $oldFileName = DB::table('galeris')->where('id_galeri', $id)->value('gambar');
            Storage::delete('public/img/' . $oldFileName);
    
            // Proses update
            DB::table('galeris')->where('id_galeri', $id)->update([
                'gambar' => $newFileName,
                'deskripsi_galeri' => $request->deskripsi_galeri,
                'harga' => $request->harga,
            ]);
        } else {
            // Proses update jika tidak ada file gambar baru
            DB::table('galeris')->where('id_galeri', $id)->update([
                'deskripsi_galeri' => $request->deskripsi_galeri,
                'harga' => $request->harga,
            ]);
        }
        
    
        // Redirect ke halaman yang sesuai
        return redirect()->route('admin_konten.galeri')->with(['success' => 'Data Berhasil ditambah']);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('galeris')->where('id_galeri',$id)-> delete();
        return redirect()->route('admin_konten.galeri')->with(['success' => 'Data Berhasil dihapus']);
    }
}

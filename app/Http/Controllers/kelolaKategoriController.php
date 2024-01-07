<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class kelolaKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slug = "kategori";
        $kategori = DB::table("kategori")->get();
        return view('admin_konten.kelolaKategori',compact('slug', 'kategori'));
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
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $this->validate($request,[
            'namaKategori' => 'required'
        ]);
        DB::table('kategori')->insert([
            'namaKategori' => $request->namaKategori
        ]);

        return redirect('/kategori')->with(['success' => 'Kategori Berhasil Ditambah']);
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
        //
        $this->validate($request,[
            'namaKategori' => 'required'
        ]);
        DB::table('kategori')->where('idkategori',$id)->update([
            'namaKategori' => $request->namaKategori
        ]);
        return redirect('/kategori')->with(['success' => 'Kategori Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('kategori')->where('idkategori',$id)->delete();
        return redirect('/kategori')->with(['success' => 'Kategori Berhasil Dihapus']);
    }

}

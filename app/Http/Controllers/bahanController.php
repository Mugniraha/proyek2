<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class bahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slug = "bahan";
        $bahan = DB::table('bahan')->get();
        return view('admin_konten.kelolaHargaBahan',compact('slug','bahan'));
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
        $this->validate($request,[
            'namaBahan'  => 'required',
            'hargaBahan' => 'required',
        ]);
        DB::table('bahan')->insert([
            'namaBahan'  => $request->namaBahan,
            'hargaBahan' => $request->hargaBahan,
        ]);

        return redirect('/bahan')->with(['success' => 'Harga Berhasil diupdate']);
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
        //untuk validasi
        $this->validate($request,[
            'namaBahan'  => 'required',
            'hargaBahan' => 'required',
        ]);
        DB::table('bahan')->where('idBahan',$id)->update([
            'namaBahan'  => $request->namaBahan,
            'hargaBahan' => $request->hargaBahan,

        ]);

        return redirect('/bahan')->with(['success' => 'Harga Berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

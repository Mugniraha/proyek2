<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class pengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pengiriman = DB::table('pengiriman')->get();
        $slug = "pengiriman";
        return view('admin_konten.pengiriman', compact('pengiriman','slug'));
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
            'jenisPengiriman' => 'required',
            'biayaPengiriman' => 'required',
        ]);
        DB::table('pengiriman')->insert([
            'jenisPengiriman' => $request->jenisPengiriman,
            'biayaPengiriman' => $request->biayaPengiriman,
        ]);

        return redirect('/pengiriman')->with(['success'=>'Berhasil Menambah Pengiriman']);
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
            'jenisPengiriman' => 'required',
            'biayaPengiriman' => 'required',
        ]);
        DB::table('pengiriman')->where('idPengiriman',$id)->update([
            'jenisPengiriman' => $request->jenisPengiriman,
            'biayaPengiriman' => $request->biayaPengiriman,
        ]);
        return redirect('/pengiriman')->with(['success'=> 'Berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('pengiriman')->where('idPengiriman', $id)->delete();
        return redirect('/pengiriman')->with(['success' => 'Berhasil dihapus']);
    }
}

<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;

class cusbarPesananBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slug = "cbPesananBaru";
        $custom = Pesanan::with('User')->get();
        return view("admin_konten.cbPesananBaru", compact("slug","custom"));
    }

    public function terimaPesanan($idPesanan)
    {
        $pesanan = Pesanan::find($idPesanan);
        $pesanan->statusPesanan = 'Sudah Diverifikasi';
        $pesanan->save();

        return back()->with('success', 'Pesanan diterima.');
    }

    public function tolakPesanan($idPesanan)
    {
        $pesanan = Pesanan::find($idPesanan);
        $pesanan->statusPesanan = 'Ditolak';
        $pesanan->save();

        return back()->with('success', 'Pesanan ditolak.');
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

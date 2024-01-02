<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Models\formjs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class jaserDalamProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "jsDalamproses";
        $jasaServis = Formjs::with('User')->get();
        return view("admin_konten.jsDalamProses", compact("slug", "jasaServis"));
    }

    public function selesai($idJasa){
        $pesanan = Formjs::find($idJasa);
        $pesanan->status = 'Selesai';
        $pesanan->tanggal_selesai = now();
        $pesanan->save();

        return back()->with('success', 'Pesanan selesai.');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\formjs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class formJsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $slug = "jasa_service";
=======
        $slug = "form_js";
>>>>>>> 457fa1e90c91943ccab5117508878ed002c19d5b
        $form_js = DB::table('jasa_service')->get();
        return view('jasaService_User.formulir', compact('slug','form_js'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jasaService_User.formulir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaJasa' => 'required',
            'deskripsiJasa' => 'required',
<<<<<<< HEAD
            'harga' => 'required',
            'kategoriJasa' => 'required',
=======
            'kategorijasa' => 'required',
>>>>>>> 457fa1e90c91943ccab5117508878ed002c19d5b
            'alamat' => 'required',
            'tanggal' => 'required',
            'status' => 'required',

        ]);
        $userId = Auth::id();

        $dataPesanan = $request->all();
        $dataPesanan['idUser'] = $userId;

        formJS::create($dataPesanan);

        return redirect()->route('serviceBaruIndex')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
        $request->validate([
            'nama' => 'required',
            'telpon' => 'required',
            'jenisJasa' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
        ]);

        $formJS = formJS::find($id);
        $formJS->update($request->all());

        return redirect()->route('nama_route_index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

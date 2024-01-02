<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Formjs;
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
        $slug = "jasa_service";
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
        // $request->validate([
        //     'namaJasa' => 'required',
        //     'kategorijasa' => 'required',
        //     'deskripsiJasa' => 'required',
        //     'alamat' => 'required',
        //     'tanggal' => 'required',
        // ]);
        $userId = Auth::id();

        $dataPesanan = $request->all();
        $dataPesanan['idUser'] = $userId;
        $dataPesanan['status'] = 'Menunggu Proses';

        Formjs::create($dataPesanan);

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
        // $request->validate([
        //     'nama' => 'required',
        //     'telpon' => 'required',
        //     'jenisJasa' => 'required',
        //     'deskripsi' => 'required',
        //     'alamat' => 'required',
        //     'tanggal' => 'required',
        // ]);

        $formJS = Formjs::find($id);
        $formJS->update($request->all());

        return redirect()->route('nama_rote_index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

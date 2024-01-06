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
        // $form_js = DB::table('jasa_service')->get();
        $form_js = Formjs::all();
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
    $userId = Auth::id();

    $dataPesanan = $request->all();
    $dataPesanan['idUser'] = $userId;
    $dataPesanan['status'] = 'Menunggu Proses';

    $formJs = Formjs::create($dataPesanan);

    // Meneruskan ID pengguna dan ID formulir ke view notifikasi
    return redirect()->route('serviceBaruIndex', ['userId' => $userId, 'formId' => $formJs->idJasa])->with(['success' => 'Data berhasil disimpan!']);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formJS = Formjs::find($id);
        $user = $formJS->user;

        $jasaServiceData = Formjs::all();
        dd($jasaServiceData);

        return view('jasaService_User.detail_pesanan', compact('formJS', 'user', 'jasaServiceData'));
    }

    public function serviceBaruIndex()
{
    $data = [
        ['userId' => 1, 'formId' => 101],
        ['userId' => 2, 'formId' => 102],
        // Tambahkan data sesuai kebutuhan Anda
    ];

    return view('notifikasi.index', compact('data'));
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

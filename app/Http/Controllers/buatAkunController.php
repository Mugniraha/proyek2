<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\buatAkun;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class buatAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "buat_akun";
        $buat_akun = DB::table('buat_akun')->get();
        return view('profilUser.buatAkun', compact('slug','buat_akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profilUser.buatAkun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama_lengkap' => 'required',
            'telpon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        buatAkun::create($request->all());

        return redirect()->route('ProfilUserIndex')->with('success', 'Data berhasil disimpan!');
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
        $user = buatAkun::find($id);

    return view('/kelolaUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'telpon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $user = buatAkun::findOrFail($id);

        $user->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'telpon' => $request->input('telpon'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
        ]);

        return redirect()->route('ProfilUserIndex')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\buatAkun;

class ProfilUserController extends Controller
{
    public function ProfilUserIndex()
    {
        $buat_akun = BuatAkun::all(); // Ambil semua data dari tabel buat_akun
        return view('profilUser.index', compact('buat_akun'));
    }

    public function edit($id)
    {
        $user = BuatAkun::findOrFail($id);
        return view('profilUser.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'telpon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $user = BuatAkun::findOrFail($id);

        $user->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'telpon' => $request->input('telpon'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
        ]);

        return redirect()->route('ProfilUserIndex')->with('success', 'Data berhasil diperbarui!');
    }
}


<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdateProfilController extends Controller
{
    /**
     * Update user foto profil.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateFoto(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir
        $request->validate([
            'profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profilFile = time().'.'.$request->profil->extension();
        dd($profilFile);

    //     // Dapatkan data pengguna yang sedang login
    //     $user = Auth::user();

    //     // Jika ada file gambar yang diunggah
    //     if ($request->hasFile('profil')) {
    //         // Hapus foto lama jika ada
    //         if ($user->profil) {
    //             Storage::delete("public/images/{$user->profil}");
    //         }

    //         $profilFile = $request->file('profil');
    //         $profilFileName = time() . '.' . $profilFile->getClientOriginalExtension();

    //         // Pindahkan file ke direktori penyimpanan (public/images)
    //         $profilFile->storeAs('public/images', $profilFileName);

    //         // Simpan nama file gambar ke dalam basis data
    //         $user->profil = $profilFileName;
    //         $user->save();
    //     }

    //     // Redirect atau kirim respons sesuai kebutuhan
    //     return redirect()->route('ProfilUserIndex')->with('success', 'Profil berhasil diperbarui');
    // }
    return redirect()->route('ProfilUserIndex')->with('success', 'Profil berhasil diperbarui');
}
}
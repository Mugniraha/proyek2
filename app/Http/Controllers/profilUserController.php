<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;
// use  App\Models\buatAkun;
use  App\Models\User;
use App\Models\Alamat;

class ProfilUserController extends Controller
{
    public function ProfilUserIndex()
    {
        $kelola_user = User::all(); // Ambil semua data dari tabel buat_akun
        return view('profilUser.index', compact('kelola_user'));
    }

    public function updateProfileAndAddress(Request $request)
    {
        // Validasi request jika diperlukan
        // if (auth()->check()) {
        $user = auth()->user();

        // Update informasi akun
        $user->updateProfile(
            $request->input('username'),
            $request->input('name'),
            $request->input('email'),
            $request->input('telp'),
        );

        // Update atau tambahkan alamat
        $alamatData = [
            'nama_alamat' => $request->input('nama_alamat'),
            'rt_rw' => $request->input('rt_rw'),
            'desa' => $request->input('desa'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
        ];

        if ($user->alamat) {
            // Jika alamat sudah ada, update alamat
            $user->alamat->update($alamatData);
        } else {
            // Jika alamat belum ada, tambahkan alamat baru
            $user->alamat()->create($alamatData);
        }

        return redirect()->route('ProfilUserIndex')->with('success', 'Profil berhasil diperbarui');
    }
    // else {
    //     // Pengguna tidak diotentikasi, lakukan sesuatu atau tampilkan pesan kesalahan
    //     return redirect()->route('registerIndex')->with('error', 'Pengguna tidak diotentikasi.');
    // }



    public function editProfileForm()
    {
        $user = auth()->user();
        return view('profilUser.kelolaUser', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Validasi request jika diperlukan

        // Update informasi akun
        $user->updateUser([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
        ]);

        return redirect()->route('ProfilUserIndex')->with('success', 'Profil berhasil diperbarui');
    }

    public function editAddressForm()
    {
        $user = auth()->user();
        $alamat = $user->alamat;

        return view('profilUser.kelolaUser', compact('user', 'alamat'));
    }

    public function updateAddress(Request $request)
    {
        $user = auth()->user();
        $alamat = $user->alamat;

        // Validasi request jika diperlukan

        // Update informasi alamat
        $alamat->update([
            'nama_alamat' => $request->input('nama_alamat'),
            'rt_rw' => $request->input('rt_rw'),
            'desa' => $request->input('desa'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
        ]);

        return redirect()->route('ProfilUserIndex')->with('success', 'Alamat berhasil diperbarui');
    }
}


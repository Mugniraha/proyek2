<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;
use  App\Models\User;
use App\Models\Alamat;

class ProfilUserController extends Controller
{
    public function ProfilUserIndex()
    {
        $kelola_user = User::all(); // Ambil semua data dari tabel buat_akun
        return view('profilUser.index', compact('kelola_user'));
    }
    public function editProfileForm()
    {
        $user = auth()->user();
        $alamat = $user->alamat;

        return view('profilUser.kelolaUser', compact('user', 'alamat'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Validasi request jika diperlukan

        // Update informasi akun
        $user->update([
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

    public function updateProfileAndAddress(Request $request)
    {
        // Metode ini dapat menangani pembaruan profil dan alamat sekaligus
        // Anda dapat menyesuaikannya sesuai kebutuhan Anda

        $user = auth()->user();

        // Validasi request jika diperlukan

        // Update informasi akun
        $userData = ([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
        ]);

        // Update atau tambahkan alamat
        $alamatData = [
            'nama_alamat' => $request->input('nama_alamat'),
            'rt_rw' => $request->input('rt_rw'),
            'desa' => $request->input('desa'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
        ];

        \Log::info('User Data Before Update: ' . json_encode($user->toArray()));
    \Log::info('Update User Data: ' . json_encode($userData));
    \Log::info('Update Alamat Data: ' . json_encode($alamatData));

        // if ($user->alamat) {
        //     // Jika alamat sudah ada, update alamat
        //     $user->alamat->update($alamatData);
        // } else {
        //     // Jika alamat belum ada, buat yang baru
        //     $newAlamat = new Alamat($alamatData);
        //     $user->alamat()->save($newAlamat);
        // }
        $user->updateProfileAndAddress($userData, $alamatData);

        \Log::info('User Data After Update: ' . json_encode($user->toArray()));

        return redirect()->route('ProfilUserIndex')->with('success', 'Profil dan alamat berhasil diperbarui');
    }
}

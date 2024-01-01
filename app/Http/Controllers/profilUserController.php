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
    $kelola_user = User::all();
    $user = auth()->user();
    $alamat = $user->alamat;

    // Menyimpan data alamat dalam sesi
    session(['alamat' => $alamat]);

    return view('profilUser.index', compact('kelola_user', 'user', 'alamat'));
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

    // public function updateProfil(Request $request)
    // {
    //     $request->validate([
    //         'profil' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'username' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255',
    //         'telp' => 'required|string|max:15',
    //         // tambahkan validasi untuk alamat sesuai kebutuhan
    //     ]);

    //     $authenticatedUserId = Auth::id();
    //     $user = User::findOrFail($authenticatedUserId);

    //     if ($request->hasFile('profil')) {
    //         $file = $request->file('profil');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/profiles', $fileName);

    //         if ($user->profil) {
    //             Storage::delete('public/profiles/' . $user->profil);
    //         }

    //         $user->update(['profil' => $fileName]);
    //     }

    //     $user->update([
    //         'username' => $request->input('username'),
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'telp' => $request->input('telp'),
    //         // tambahkan proses untuk menyimpan alamat sesuai kebutuhan
    //     ]);

    //     return redirect()->route('ProfilUserIndex')->with('success', 'Profil berhasil diperbarui');
    // }

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

        \Log::info('User ID: ' . $user->id);
        \Log::info('Alamat Before Update: ' . json_encode($alamat->toArray()));

        // Validasi request jika diperlukan

        // Update informasi alamat
        $alamat->update([
            'nama_alamat' => $request->input('nama_alamat'),
            'rt_rw' => $request->input('rt_rw'),
            'desa' => $request->input('desa'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
        ]);

        \Log::info('Alamat After Update: ' . json_encode($alamat->toArray()));

        // return redirect()->route('ProfilUserIndex')->with('success', 'Alamat berhasil diperbarui');
        return view('profilUser.index', compact('user', 'alamat'))->with('success', 'Alamat berhasil diperbarui');
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

        $user->updateProfileAndAddress($userData, $alamatData);

        \Log::info('User Data After Update: ' . json_encode($user->toArray()));

        // Hapus data sesi lama
        session()->forget('user');
        session()->forget('alamat');

        // Tetapkan data pengguna dan alamat yang diperbarui dalam sesi
        session(['user' => $user]);
        session(['alamat' => $user->alamat]);

        return redirect()->route('ProfilUserIndex')->with('success', 'Profil dan alamat berhasil diperbarui');
    }
}

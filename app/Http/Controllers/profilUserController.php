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

        $user = auth()->user();

        // Update informasi akun
        $user->updateProfile(
            $request->input('username'),
            $request->input('name'),
            $request->input('email'),
            $request->input('telp')
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

    // public function updateProfileAndAddress(Request $request)
    // {
    //     // dd($request->all());
    //     $user = Auth::user();

    //     // Validasi input
    //     $request->validate([
    //         'username' => 'required',
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'telp' => 'required',
    //         'nama_alamat' => 'required',
    //         'rt_rw' => 'required',
    //         'desa' => 'required',
    //         'kecamatan' => 'required',
    //         'kabupaten' => 'required',
    //     ]);

    //     // Perbarui profil pengguna
    //     $user->updateProfile(
    //         $request->input('username'),
    //         $request->input('name'),
    //         $request->input('email'),
    //         $request->input('telp')
    //     );

    //     // Periksa apakah pengguna memiliki alamat terkait
    //     if ($user->alamat) {
    //         // Perbarui alamat pengguna
    //         $user->alamat->updateUserAddress(
    //             $request->input('nama_alamat'),
    //             $request->input('rt_rw'),
    //             $request->input('desa'),
    //             $request->input('kecamatan'),
    //             $request->input('kabupaten')
    //         );
    //     } else {
    //         // Jika pengguna tidak memiliki alamat, buat yang baru
    //         $user->alamat()->create([
    //             'nama_alamat' => $request->input('nama_alamat'),
    //             'rt_rw' => $request->input('rt_rw'),
    //             'desa' => $request->input('desa'),
    //             'kecamatan' => $request->input('kecamatan'),
    //             'kabupaten' => $request->input('kabupaten'),
    //         ]);
    //     }

        // session(['alamat' => [
        //     'nama_alamat' => $request->input('nama_alamat'),
        //     'rt_rw' => $request->input('rt_rw'),
        //     'desa' => $request->input('desa'),
        //     'kecamatan' => $request->input('kecamatan'),
        //     'kabupaten' => $request->input('kabupaten'),
        // ]]);
        // dd(session('alamat'));

        // $user->alamat()->updateOrCreate(
        //     [],
        //     session('alamat')
        //     [
        //         'nama_alamat' => $request->input('nama_alamat'),
        //         'rt_rw' => $request->input('rt_rw'),
        //         'desa' => $request->input('desa'),
        //         'kecamatan' => $request->input('kecamatan'),
        //         'kabupaten' => $request->input('kabupaten'),
    //     //     ]
    //     // );

    //     return redirect('/profilUser')->with('success', 'Profil dan alamat berhasil diperbarui');
    // }


    // public function updateProfilePicture(Request $request, $userId)
    // {
    //     $request->validate([
    //         'profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $user = User::find($userId);

    //     if (!$user) {
    //         return response()->json(['error' => 'User not found.'], 404);
    //     }

    //     if ($request->hasFile('profil')) {
    //         $image = $request->file('profil');
    //         $imageName = 'profile_picture_' . time() . '.' . $image->getClientOriginalExtension();
    //         $path = $image->storeAs('public/profile_pictures', $imageName);

    //         // Update nama file gambar profil di database
    //         $user->update(['profile_picture' => $imageName]);

    //         // Hapus gambar lama jika ada
    //         if ($user->profile_picture) {
    //             Storage::delete('public/profile_pictures/' . $user->profile_picture);
    //         }

    //         return response()->json(['url' => asset('storage/profile_pictures/' . $imageName)]);
    //     }

    //     return response()->json(['error' => 'No image uploaded.'], 400);
    // }

    // // public function updateProfilePicture(Request $request)
    // // {
    // //     \Log::info('Update Profile Picture function called.');
    // //     $request->validate([
    // //         'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // //     ]);
    // //     \Log::info('File validation passed.');

    // //     $user = User::findOrFail(auth()->user()->id);

    // //     if ($request->hasFile('profile')) {
    // //         \Log::info('File exists.');
    // //         $file = $request->file('profile');
    // //         $fileName = time() . '_' . $file->getClientOriginalName();
    // //         $file->storeAs('public/profiles', $fileName);
    // //         \Log::info('File stored successfully.');

    // //         // Hapus file lama jika ada
    // //         if ($user->profile) {
    // //             Storage::delete('public/profiles/'.$user->profile);
    // //         }

    // //         $user->update(['profile' => $fileName]);
    // //     }

    // //     return redirect()->route('ProfilUserIndex')->with('success', 'Foto profil berhasil diperbarui!');
    // // }
}


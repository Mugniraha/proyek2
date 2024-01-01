<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('password.edit');
    }

    public function ubahKataSandi(Request $request)
    {
        // $request->validate([
        //     'pw_lama' => 'required',
        //     'pw_baru' => 'required|min:6',
        // ]);

        $user = auth()->user();

        // Periksa apakah kata sandi lama cocok dengan kata sandi saat ini yang diotentikasi oleh pengguna
        if (Hash::check($request->pw_lama, auth()->user()->password)) {
            // Dump data untuk pemeriksaan
            // dd($request->all(), auth()->user()->password);

            // Perbarui kata sandi pengguna
            // auth()->user()->update([
            //     'password' => bcrypt($request->pw_baru),
            // ]);

            $user->password = bcrypt($request->pw_baru);
            $user->save();

            return redirect()->route('ProfilUserIndex')->with('success', 'Kata sandi berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'Kata sandi lama salah.');
        }
    }
}




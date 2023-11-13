<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('password.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
        'current_password' => ['required'],
        'password' => ['required', 'confirmed'],
    ]);

    $user = auth()->user();

    // Pastikan pengguna autentikasi tersedia
    if (!$user) {
        return redirect()->back()->withErrors(['current_password' => 'User not authenticated']);
    }

    // Periksa kecocokan password saat ini
    if (Hash::check($request->current_password, $user->password)) {
        // Lakukan proses update password di sini
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('message', 'Password updated successfully');
    }

    // Jika password saat ini tidak cocok
    throw ValidationException::withMessages([
        'current_password' => 'Your current password does not match',
    ]);
    }
}

    // public function showForm()
    // {
    //     return view('auth.change-password');
    // }

    // public function changePassword(Request $request)
    // {
    //     $user = Auth::user();

    //     // Validasi input
    //     $request->validate([
    //         'old_password' => 'required',
    //         'password' => 'required|confirmed|min:8',
    //     ]);

    //     // Panggil metode changePassword dari model User
    //     if ($user->changePassword($request->old_password, $request->password)) {
    //         return redirect()->route('home')->with('success', 'Password berhasil diubah');
    //     } else {
    //         return redirect()->back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
    //     }
    // }




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $telp = $user->telp;

            // Gunakan nilai $telp sesuai kebutuhan Anda
            return redirect('/home')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }
}

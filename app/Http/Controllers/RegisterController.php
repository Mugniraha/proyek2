<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use  App\Models\User;
use App\Models\Alamat;

class RegisterController extends Controller
{
    /**y
     * Display a listing of the resource.
     */

    public function registerIndex()
    {
        return view('loginUser.register');
    }

    public function registerPost(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->telp = $request->telp;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::put('user', $user);

        return redirect()->route('loginIndex')->with('success', 'Register successfully');
    }

    public function loginIndex()
    {
        return view('loginUser.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, simpan data pengguna dalam sesi
            $user = Auth::user();
            session(['user' => $user]);

            return redirect('/profilUser')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau Password yang Anda masukkan salah. Silahkan ulangi!');
    }

    public function logout()
    {
        $authenticatedUser = Auth::user();

        // Membersihkan atau menghapus sesi yang tidak diperlukan
        Session::forget('user_profile_url_' . $authenticatedUser->idUser);

        // Lakukan proses logout lainnya
        Auth::logout();

        return view('homeAwal.index');
    }
}

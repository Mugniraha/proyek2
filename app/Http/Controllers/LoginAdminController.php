<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registerAdminIndex()
    {
        return view('loginAdmin.register');
    }

    public function registerAdminPost(Request $request)
    {
        $admin = new Admin();
        $admin->emailAdmin = $request->emailAdmin;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->route('loginAdminIndex')->with('success', 'Register successfully');
        // Validasi input
        // $request->validate([
        //     'emailAdmin' => 'required|email|unique:admin',
        //     'password' => 'required|min:6',
        // ]);

    }

    public function loginAdminIndex()
    {
        return view('loginAdmin.login');
    }

    public function loginAdminPost(Request $request)
{
    $credentials = [
        'emailAdmin' => $request->emailAdmin,
        'password' => $request->password,
    ];

    // Cari admin berdasarkan email
    $admin = Admin::where('emailAdmin', $request->emailAdmin)->first();

    // Periksa apakah admin ditemukan dan password cocok
    if ($admin && Hash::check($request->password, $admin->password)) {
        // Jika cocok, login berhasil

    //     // Ambil ID admin yang berhasil login
    // $adminId = $admin->id;
        return redirect()->route('dashboard.index')->with('success', 'Login berhasil');
    }

    // Jika tidak cocok, kembalikan ke halaman login
    return back()->with('error', 'Email or Password salah');
}

public function changePassword(Request $request)
{
    // Periksa apakah pengguna terautentikasi
    if (!auth()->check()) {
        return redirect()->route('loginAdminIndex')->with('error', 'Pengguna belum terautentikasi');
    }

    // Dapatkan admin yang terautentikasi
    $admin = auth()->user();

    // Periksa apakah kata sandi lama benar
    if (!Hash::check($request->old_password, $admin->password)) {
        return back()->with('error', 'Kata sandi lama tidak benar');
    }

    // Perbarui kata sandi admin
    $admin->password = bcrypt($request->new_password);
    $admin->save();

    return redirect()->route('dashboard.index')->with('success', 'Kata sandi berhasil diperbarui');
}




public function logout(){
    Auth::logout();
    return view('homeAwal.index');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

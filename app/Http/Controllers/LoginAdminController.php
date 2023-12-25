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
        // $admin->nama = $request->nama;
        // $admin->no_hp = $request->no_hp;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return back()->with('success', 'Register successfully');
    }

    public function loginAdminIndex()
    {
        return view('loginAdmin.login');
    }

    public function loginAdminPost(Request $request)
{
    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    // Cari admin berdasarkan email
    $admin = Admin::where('email', $request->email)->first();

    // Periksa apakah admin ditemukan dan password cocok
    if ($admin && Hash::check($request->password, $admin->password)) {
        // Jika cocok, login berhasil
        return redirect('/dashboard')->with('success', 'Login berhasil');
    }

    // Jika tidak cocok, kembalikan ke halaman login
    return back()->with('error', 'Email or Password salah');
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

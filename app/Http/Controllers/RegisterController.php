<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;

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
        $user = new User();
        $user->name = $request->name;
        $user->telp = $request->telp;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Register successfully');
    }

    public function loginIndex()
    {
        return view('loginUser.login');
    }

    public function loginAdminIndex()
    {
        return view('loginAdmin.login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/profilUser')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Passwoord salah');
    }

    public function change_password(){
        return view ('password.edit');
    }

    // public function change_password(){
    //     $request->validate([
    //         'old_password', 'new_password', 'confirm_password'
    //     ]);

    //     $current_user=auth()->user();
    //     if(Hash::check($request->old_password,$current_user->password)){
    //         $current_user->update([
    //             'password'=>bcrypt($request->new_password)
    //         ]);
    //         return redirect()->back()->with('success','password lama berhasil di perbaharui')
    //     }else{
    //         return redirect()->back()->with('error','password lama tidak berhasil di perbaharui')
    //     }
    // }

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

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

        return back()->with('error', 'Email or Password salah');
    }

    public function logout(){
        Auth::logout();
        return view('homeAwal.index');
    }


    // public function profileUserIndex()
    // {
    //     // Ambil data pendaftaran pengguna dari sesi
    //     $user_registration_data = session('user_registration_data');
    //     dd($user_registration_data);

    //     return view('profilUser', compact('user_registration_data'));
    // }


    // public function loginAdminIndex()
    // {
    //     return view('loginAdmin.login');
    // }

    // public function loginAdminPost(Request $request)
    // {
    //     $credetials = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($credetials)) {
    //         return redirect('/dashboard')->with('success', 'Login berhasil');
    //     }

    //     return back()->with('error', 'Email or Passwoord salah');
    // }

    // public function updateProfileAndAddress(Request $request)
    // {
    // $user = User::find(Auth::id());
    // // $alamat = $user->alamat;
    // if (!$user->alamat) {
    //     // Jika belum memiliki data alamat, buat data alamat baru
    //     $alamat = new Alamat();
    //     $user->alamat()->save($alamat);
    // } else {
    //     // Jika sudah memiliki data alamat, dapatkan alamat yang sudah ada
    //     $alamat = $user->alamat;
    // }

    // $user->updateProfile(
    //     $request->input('name'),
    //     $request->input('email'),
    //     $request->input('telpon')
    // );

    // $alamat->updateUserAddress(
    //     $request->input('nama_alamat'),
    //     $request->input('rt_rw'),
    //     $request->input('desa'),
    //     $request->input('kecamatan'),
    //     $request->input('kabupaten')
    // );

    //     return back()->with('success', 'Informasi profil dan alamat berhasil diperbarui');
    // }

    // public function change_password(){
    //     return view ('password.edit');
    // }

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

    // public function updateProfilePicture(Request $request)
    // {
    //     $user = Auth::user();

    //     // Hapus foto profil lama jika ada
    //     if ($user->profil) {
    //         // Gantilah 'nama_folder' dengan nama folder penyimpanan gambar Anda
    //         Storage::delete('nama_folder/' . $user->profil);
    //     }

    //     // Simpan foto baru di storage dan dapatkan path-nya
    //     $path = $request->file('profil')->store('nama_folder', 'public');

    //     // Update kolom profil di dalam tabel users
    //     $user->update(['profil' => $path]);

    //     // Return response berupa URL gambar yang baru
    //     return response()->json(['url' => asset("storage/{$path}")]);
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

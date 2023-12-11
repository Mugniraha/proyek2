<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\buatAkun;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class buatAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "buat_akun";
        $buat_akun = DB::table('buat_akun')->get();

        return view('profilUser.buatAkun', compact('slug','buat_akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profilUser.buatAkun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'username' => 'required',
        'nama_lengkap' => 'required',
        'telpon' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
    ]);

    // Simpan foto ke dalam storage
    if ($request->hasFile('profile')) {
        $file = $request->file('profile');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/profiles', $fileName);
    }

    // Simpan data ke dalam database
    buatAkun::create([
        'username' => $request->input('username'),
        'nama_lengkap' => $request->input('nama_lengkap'),
        'telpon' => $request->input('telpon'),
        'email' => $request->input('email'),
        'alamat' => $request->input('alamat'),
        'profile' => $fileName ?? null, // Nama file foto
    ]);


    return redirect()->route('ProfilUserIndex')->with('success', 'Data berhasil disimpan!');
}

    // private function checkIfUserHasCreatedAccount()
    // {
    //     // Sesuaikan logika berdasarkan kondisi yang sesuai pada aplikasi Anda
    //     // Misalnya, cek apakah ada data buatAkun untuk pengguna saat ini
    //     $userHasCreatedAccount = buatAkun::where('user_id', auth()->id())->exists();

    //     return $userHasCreatedAccount;
    // }


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
// ...

public function edit(string $id)
{
    $buat_akun = buatAkun::find($id);

    if (!$buat_akun) {
        return abort(404); // Tampilkan halaman 404 jika user tidak ditemukan
    }

    return view('profilUser.kelolaUser', compact('buat_akun'));
}



public function update(Request $request, string $id)
{
    // $request->validate([
    //     'username' =>'required',
    //     'nama_lengkap' =>'required',
    //     'telpon' =>'required',
    //     'email' =>'required',
    //     'alamat' =>'required',
    //     'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);

    // $buat_akun = buatAkun::findOrFail($id);

    // $buat_akun->update([
    //     'username' => $request->input('username'),
    //     'nama_lengkap' => $request->input('nama_lengkap'),
    //     'telpon' => $request->input('telpon'),
    //     'email' => $request->input('email'),
    //     'alamat' => $request->input('alamat'),
    // ]);
    $buat_akun = buatAkun::findOrFail($id);
    dd($buat_akun);
    $buat_akun->update($request->all());

    return redirect()->route('KelolaUserIndex')->with('success', 'Data berhasil diperbarui!');
}

    public function updateProfilePicture(Request $request, $id)
    {
        $request->validate([
            'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $buat_akun = buatAkun::findOrFail($id);

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profiles', $fileName);

            // Hapus file lama jika ada
            if ($buat_akun->profile) {
                Storage::delete('public/profiles/'.$buat_akun->profile);
            }

            $buat_akun->update(['profile' => $fileName]);
        }

        return redirect()->route('ProfilUserIndex')->with('success', 'Foto profil berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

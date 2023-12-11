<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class profilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slug = "profil"; // Gantilah dengan nilai sesuai dengan kebutuhan Anda
        $profil = DB::table('profil_admins')->get();
        return view('admin_konten.profil', compact('slug','profil'));
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
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nama'   => 'required',
            'no_hp'  => 'required',
            'email'  => 'required',
            'alamat' => 'required',
        ]);

        $img = $request->file('gambar');
        $img->storeAs('public/img',$img->hashName());
        // Proses insert
        DB::table('profil_admins')->insert([
            'gambar' => $img->hashName(),
            'nama'   => $request->nama,
            'no_hp'  => $request->no_hp,
            'email'  => $request->email,
            'alamat' => $request->alamat,
        ]);

        // Redirect ke halaman yang sesuai
        return redirect('/profil')->with(['success' => 'Data Berhasil ditambah']);
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
        $this->validate($request, [
            'nama'   => 'required',
            'no_hp'  => 'required',
            'email'  => 'required',
            'alamat' => 'required',
        ]);
        // Proses update jika tidak ada file gambar baru
        DB::table('profil_admins')->where('id_profil', $id)->update([
            'nama'   => $request->nama,
            'no_hp'  => $request->no_hp,
            'email'  => $request->email,
            'alamat' => $request->alamat,
        ]);
        // Redirect ke halaman yang sesuai
        return redirect('/profil')->with(['success' => 'Data Berhasil ditambah']);
    }

    public function updateProfil(Request $request, string $id)
    {
        // Validasi
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Ambil gambar baru
        $img = $request->file('gambar');

        // Jika ada gambar baru
        if ($img) {
            // Generate nama baru menggunakan hashName
            $newFileName = $img->hashName();

            // Simpan gambar baru
            $img->storeAs('public/img', $newFileName);

            // Hapus gambar lama jika sudah ada
            $oldFileName = DB::table('profil_admins')->where('id_profil', $id)->value('gambar');
            Storage::delete('public/img/' . $oldFileName);

            // Proses update
            DB::table('profil_admins')->where('id_profil', $id)->update([
                'gambar' => $newFileName,
            ]);
            return redirect('/profil')->with(['success' => 'Data Berhasil ditambah']);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

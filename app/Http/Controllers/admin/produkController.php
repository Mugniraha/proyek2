<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "galeri";
        $galeri = DB::table('produk')->get();
        return view('admin_konten.produk', compact('slug','galeri'));
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

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'gambar'           => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'namaProduk'       => 'required',
            'kategori'         => 'required',
            'bahan'            => 'required',
            'warna'            => 'required',
            'panjang'          => 'required',
            'lebar'            => 'required',
            'tinggi'           => 'required',
            'deskripsi_produk' => 'required',
            'harga'            => 'required',
        ]);

        $img = $request->file('gambar');
        $img->storeAs('public/img',$img->hashName());
        // Proses insert
        DB::table('produk')->insert([
            'gambar' => $img->hashName(),
            'namaProduk'       => $request->namaProduk,
            'kategori'         => $request->kategori,
            'bahan'            => $request->bahan,
            'warna'            => $request->warna,
            'panjang'          => $request->panjang,
            'lebar'            => $request->lebar,
            'tinggi'           => $request->tinggi,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga'            => $request->harga,
        ]);


        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Data Berhasil ditambah']);
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
        // Validasi
        $this->validate($request, [
            'namaProduk'       => 'required',
            'kategori'         => 'required',
            'bahan'            => 'required',
            'warna'            => 'required',
            'panjang'          => 'required',
            'lebar'            => 'required',
            'tinggi'           => 'required',
            'deskripsi_produk' => 'required',
            'harga'            => 'required',
        ]);
        // Proses update jika tidak ada file gambar baru
        DB::table('produk')->where('idProduk', $id)->update([
            'namaProduk'       => $request->namaProduk,
            'kategori'         => $request->kategori,
            'bahan'            => $request->bahan,
            'warna'            => $request->warna,
            'panjang'          => $request->panjang,
            'lebar'            => $request->lebar,
            'tinggi'           => $request->tinggi,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga'            => $request->harga,
        ]);
        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function updateGambar(Request $request, string $id)
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
            $oldFileName = DB::table('produk')->where('idProduk', $id)->value('gambar');
            Storage::delete('public/img/' . $oldFileName);

            // Proses update
            DB::table('produk')->where('idProduk', $id)->update([
                'gambar' => $newFileName,
            ]);
        }

        // Redirect ke halaman yang sesuai
        return redirect('/galeri')->with(['success' => 'Gambar Berhasil diperbarui']);
    }


    public function destroy(string $id)
    {
        // untuk mendapatkan gambar sesuai id
        $fileName = DB::table('produk')->where('idProduk', $id)->value('gambar');

        // Untuk hapus gambar dari folder public/img
        Storage::delete('public/img/' . $fileName);

        // Untuk hapus gambar di database
        DB::table('produk')->where('idProduk', $id)->delete();

        return redirect('/galeri')->with(['success' => 'Data Berhasil dihapus']);
    }

}

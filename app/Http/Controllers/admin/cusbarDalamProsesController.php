<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class cusbarDalamProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slug = "cbDalamProses";
        $custom = Pesanan::with('pembayaran')->get();
        return view("admin_konten.cbDalamProses", compact("slug","custom"));
    }

    public function verifikasiPembayaran($idPesanan){
        $pesanan = Pesanan::find($idPesanan);
        $pesanan->statusPesanan = "Sedang Diproses";
        $pesanan->statusPembayaran = "DP Sudah Dibayar";
        $pesanan->save();
        return back()->with('success', 'Pembayaran Terverifikasi');
    }

    public function inputProgres(Request $request):RedirectResponse{
        $this->validate($request, [
            'progres'      => 'required',
            // 'keterangan'   => 'required',
        ]);

        $progres = $request->progres;
        $keterangan = '';

        switch ($progres) {
            case 25:
                $keterangan = 'Bahan Sedang Dibeli';
                $tglupdate = now();
                break;
            case 50:
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg|max:2048',
                ]);
                $img = $request->file('gambar');
                $img->storeAs('public/img', $img->hashName());
                $keterangan = 'Sedang dibuat';
                $tglupdate = now();
                break;
            case 75:
                $keterangan = 'Sebentar lagi';
                $tglupdate = now();
                break;
            case 100:
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg|max:2048',
                ]);
                $img = $request->file('gambar');
                $img->storeAs('public/img', $img->hashName());
                $keterangan = 'Selesai';
                $tglupdate = now();
                break;
        }

        DB::table('pemantauan')->insert([
            'idPesanan'   => $request->idPesanan,
            'progres'     => $progres,
            'keterangan'  => $keterangan,
            'tanggalUpdate' => $tglupdate,
            'gambar'      => isset($img) ? $img->hashName():null,
        ]);
        // Redirect ke halaman yang sesuai
        return redirect('/cbDalamProses')->with(['success' => 'Data Berhasil ditambah']);
    }

    public function selesai($idPesanan){
        $pesanan = Pesanan::find($idPesanan);
        $pesanan->statusPesanan = 'Selesai';
        $pesanan->statusPembayaran = 'Sudah Dibayar';
        $pesanan->save();
        return back()->with('success', 'Pesanan Selsai');
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

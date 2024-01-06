<?php

namespace App\Http\Controllers;
use  App\Models\Formjs;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function NotifikasiIndex()
    {
        return view('notifikasi.index');
    }

    public function KonfirmasiIndex()
    {
        return view('notifikasi.konfirmasi');
    }

    public function index()
    {
        $dataPesanan = Formjs::all(); // Perbaikan penulisan nama class dan variabel

        return view('notifikasi.index', ['dataPesanan' => $dataPesanan]); // Mengirim data ke view dengan nama 'dataProduk'
    }
    // public function show($idJasa)
    // {
    //     $service = Formjs::find($idJasa);
    //     return view('notifikasi.index', compact('service'));
    // }
}


<?php

namespace App\Http\Controllers;

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
}


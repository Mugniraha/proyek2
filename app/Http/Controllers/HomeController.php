<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeIndex()
    {
        return view('homeAwal.index');
    }
}


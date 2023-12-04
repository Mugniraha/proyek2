<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilUserController extends Controller
{
    public function ProfilUserIndex()
    {
        return view('profilUser.index');
    }
}


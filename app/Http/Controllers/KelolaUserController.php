<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaUserController extends Controller
{
    public function KelolaUserIndex()
    {
        return view('profilUser.kelolaUser');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceBaruController extends Controller
{
    public function serviceBaruIndex()
    {
        return view('profilUser.service');
    }
}


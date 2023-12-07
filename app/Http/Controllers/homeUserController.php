<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function HomeUserIndex()
    {
        return view('jasaService_User.index');
    }
}


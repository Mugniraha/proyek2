<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumProdukController extends Controller
{
    public function index()
    {
        return view('costumproduk.index'); 
    }
}
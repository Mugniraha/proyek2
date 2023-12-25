<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Models\formjs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class jaserSelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug="JsSelesai";
        $jasaServis = DB::table('form_js')->where('status','Selesai')->orWhere('status','Ditolak')->get();
        return view("admin_konten.jsSelesai",compact("slug","jasaServis"));
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

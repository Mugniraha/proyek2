<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\customController;
use App\Http\Controllers\historiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [profilController::class, 'index']);
Route::get('/profil', function(){
    $slug = "profil";
    return view('admin_konten.profil', compact('slug'));
});
Route::get('/', [galeriController::class, 'index']);
Route::get('/galeri', [galeriController::class, 'index']);

// Route::get('/service', function () {
//     $slug = "service";
//     return view('admin_konten.service', compact('slug'));
// });
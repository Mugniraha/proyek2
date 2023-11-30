<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\admin\galeriController;
use App\Http\Controllers\admin\jaserPesananBaruController;
use App\Http\Controllers\admin\jaserDalamProsesController;
use App\Http\Controllers\admin\jaserSelesaiController;
use App\Http\Controllers\admin\cusbarPesananBaruController;
use App\Http\Controllers\admin\cusbarDalamProsesController;
use App\Http\Controllers\admin\cusbarSelesaiController;
use App\Http\Controllers\admin\historyJaserController;
use App\Http\Controllers\admin\historyCusbarController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\customController;
use App\Http\Controllers\historiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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


Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [RegisterController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [RegisterController::class, 'loginPost'])->name('loginPost');
Route::get('password/edit', [ChangePasswordController::class, 'edit'])->name('password.edit');
Route::put('password/edit', [ChangePasswordController::class, 'update'])->name('password.update');
Route::get('/home', [HomeController::class, 'HomeIndex'])->name('HomeIndex');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');



Route::get('/bantuan', function () {
    return view('/homeAwal/bantuan');
});
Route::get('/notifikasi', function () {
    return view('/notifikasi/index');
});


// Route::get('/', [galeriController::class, 'index']);
Route::resource('/galeri', galeriController::class);
Route::put('/galeri/{id}/update-gambar', [galeriController::class, 'updateGambar'])->name('galeri.updateGambar');
Route::resource('/jsPesananbaru', jaserPesananBaruController::class);
Route::resource('/jsDalamproses', jaserDalamProsesController::class);
Route::resource('/jsSelesai', jaserSelesaiController::class);
Route::resource('/cbPesananBaru', cusbarPesananBaruController::class);
Route::resource('/cbDalamProses',cusbarDalamProsesController::class);
Route::resource('/cbSelesai', cusbarSelesaiController::class);
Route::resource('/historyJaser', historyJaserController::class);
Route::resource('/historyCusbar', historyCusbarController::class);
Route::resource('/dashboard', dashboardController::class);


// Route::get('/galeri', [galeriController::class, 'index']);


Route::get('/service', function () {
    $slug = "service";
    return view('admin_konten.service', compact('slug'));
});


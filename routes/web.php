<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChangePasswordController;
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


Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [RegisterController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [RegisterController::class, 'loginPost'])->name('loginPost');
Route::get('password/edit', [ChangePasswordController::class, 'edit'])->name('password.edit');
Route::put('password/edit', [ChangePasswordController::class, 'update'])->name('password.update');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/change-password', [ChangePasswordController::class, 'showForm'])->name('password.change');
//     Route::post('/change-password', [ChangePasswordController::class, 'changePassword']);
// });
Route::resource('/galeri', galeriController::class);

// Route::get('/galeri', [galeriController::class, 'index']);


Route::get('/service', function () {
    $slug = "service";
    return view('admin_konten.service', compact('slug'));
});


<?php

use App\Http\Controllers\buatAkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\admin\profilAdminController;
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
use App\Http\Controllers\bantuanController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\customController;
use App\Http\Controllers\formJsController;
use App\Http\Controllers\historiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ProfilUserController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\serviceBaruController;
use App\Http\Controllers\CostumProdukController;
use App\Http\Controllers\DaftarPesananController;
use App\Http\Controllers\WishlistController;




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

Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/loginUser', [RegisterController::class, 'loginIndex'])->name('loginIndex');
Route::get('/loginAdmin', [RegisterController::class, 'loginAdminIndex'])->name('loginAdminIndex');
Route::post('/loginUser', [RegisterController::class, 'loginPost'])->name('loginPost');
Route::post('/loginAdmin', [RegisterController::class, 'loginAdminPost'])->name('loginAdminPost');

Route::get('password/edit', [ChangePasswordController::class, 'edit'])->name('password.edit');
Route::put('password/edit', [ChangePasswordController::class, 'update'])->name('password.update');

Route::get('/home', [HomeController::class, 'HomeIndex'])->name('HomeIndex');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/akunUser', [HomeUserController::class, 'HomeUserIndex'])->name('HomeUserIndex');
Route::resource('/buatAkun', buatAkunController::class );
Route::get('/profilUser', [ProfilUserController::class, 'ProfilUserIndex'])->name('ProfilUserIndex');
Route::get('/kelolaUser', [KelolaUserController::class, 'KelolaUserIndex'])->name('KelolaUserIndex');
Route::put('/update-profile-picture/{id}', [buatAkunController::class, 'updateProfilePicture'])->name('updateProfilePicture');
// Route::put('/updateAkun/{id}', [buatAkunController::class, 'update'])->name('updateAkun');
Route::get('/kelolaUser/{id}', 'buatAkunController@edit')->name('edit_user');
Route::put('/kelolaUser/{id}', 'buatAkunController@update')->name('update_user');
Route::get('/notifikasi', [NotifikasiController::class, 'NotifikasiIndex'])->name('NotifikasiIndex');
Route::get('/konfirmasi', [NotifikasiController::class, 'KonfirmasiIndex'])->name('KonfirmasiIndex');
Route::resource('/formOrder', formJsController::class );
Route::put('/formOrder/{id}', [formJSController::class, 'update'])->name('formOrder.update');
Route::get('/serviceUser', [serviceBaruController::class, 'serviceBaruIndex'])->name('serviceBaruIndex');
Route::get('/costumproduk', [CostumProdukController::class, 'index'])->name('costumproduk.index');
Route::get('/payment', [CostumProdukController::class, 'payment'])->name('costumproduk.payment');
Route::get('/daftarpesanan', [DaftarPesananController::class, 'index'])->name('daftarpesanan.index');
Route::get('/riwayat', [DaftarPesananController::class, 'riwayat'])->name('daftarpesanan.riwayat');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
// Route::get('/serviceUser', function () {
//     return view('profilUser.service');
// });



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
Route::resource('/bantuan', bantuanController::class);
Route::resource('/profil', profilAdminController::class);



// Route::get('/galeri', [galeriController::class, 'index']);


Route::get('/service', function () {
    $slug = "service";
    return view('admin_konten.service', compact('slug'));
});


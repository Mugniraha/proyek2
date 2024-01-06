<?php

use App\Http\Controllers\buatAkunController;
use App\Http\Controllers\UpdateProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\admin\produkController as AdminProdukController;
use App\Http\Controllers\admin\profilAdminController;
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
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\bahanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\pengirimanController;





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
// Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('HomeAwal.index'); // Ganti 'home' dengan nama view yang ingin Anda tampilkan
    });
    Route::get('/', [ProdukController::class, 'landingPage'])->name('landing-page');
Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/loginUser', [RegisterController::class, 'loginIndex'])->name('loginIndex');
Route::post('/loginUser', [RegisterController::class, 'loginPost'])->name('loginPost');
Route::get('/lupaPassUser', [ChangePasswordController::class, 'edit'])->name('password.edit');
Route::put('/ubahPassword', [ChangePasswordController::class, 'ubahKataSandi'])->name('ubahKataSandi');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::post('/costumproduk', [CostumprodukController::class, 'store'])->name('costumproduk.store');

Route::get('/registerAdmin', [LoginAdminController::class, 'registerAdminIndex'])->name('registerAdminIndex');
Route::post('/registerAdmin', [LoginAdminController::class, 'registerAdminPost'])->name('registerAdminPost');
Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdminIndex'])->name('loginAdminIndex');
Route::post('/loginAdmin', [LoginAdminController::class, 'loginAdminPost'])->name('loginAdminPost');

Route::get('/lupaPassAdmin', [ChangePasswordController::class, 'editAdmin'])->name('editPassAdmin');
// Route::put('/ubahpw', [LoginAdminController::class, 'changePassword'])->name('changePassword');
Route::put('/admin/{idAdmin}/change-password', [LoginAdminController::class, 'changePassword'])->name('changePassword');

Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');


Route::get('/produk/{kategori?}', [ProdukController::class, 'index'])->name('produk.index');


Route::get('/akunUser', [HomeUserController::class, 'HomeUserIndex'])->name('HomeUserIndex');
Route::resource('/buatAkun', buatAkunController::class );

Route::get('/profilUser', [ProfilUserController::class, 'ProfilUserIndex'])->name('ProfilUserIndex');
Route::put('/profil/update', [ProfilUserController::class, 'updateProfileAndAddress'])
    ->name('updateProfileAndAddress');
Route::post('/update-address', [ProfilUserController::class, 'updateAddress'])->name('updateAddress');
Route::get('/profilUser/editProfile', [ProfilUserController::class, 'editProfileForm'])->name('editProfileForm');
Route::put('/profilUser/updateProfile', [ProfilUserController::class, 'updateProfile'])->name('updateProfile');
Route::get('/profilUser/editAddress', [ProfilUserController::class, 'editAddressForm'])->name('editAddressForm');
Route::prefix('profil')->group(function () {
Route::put('/update-foto', [UpdateProfilController::class, 'updateFoto'])->name('updateFoto');
});

Route::post('/profil/update-foto', [UpdateProfilController::class, 'updateFoto'])->name('updateFotoProfil');


Route::get('/buatAkun', [buatAkunController::class, 'index'])->name('index');

Route::get('/kelolaUser', [KelolaUserController::class, 'KelolaUserIndex'])->name('KelolaUserIndex');
Route::put('/update-profile-picture/{id}', [buatAkunController::class, 'updateProfilePicture'])->name('updateProfilePicture');
Route::get('/kelolaUser/{id}', 'buatAkunController@edit')->name('edit_user');
Route::put('/kelolaUser/{id}', 'buatAkunController@update')->name('update_user');



Route::get('/notifikasi', [NotifikasiController::class, 'NotifikasiIndex'])->name('NotifikasiIndex');
Route::get('/konfirmasi', [NotifikasiController::class, 'KonfirmasiIndex'])->name('KonfirmasiIndex');
Route::resource('/formOrder', formJsController::class,  );
Route::put('/formOrder/{id}', [formJSController::class, 'update'])->name('formOrder.update');
Route::get('/serviceUser', [serviceBaruController::class, 'serviceBaruIndex'])->name('serviceBaruIndex');
Route::resource('/costumproduk', CostumProdukController::class);
Route::get('/costumproduk/{idProduk}', [CostumProdukController::class, 'show'])->name('costumproduk.index');
Route::resource('/pembayaran', PembayaranController::class);
Route::get('/pembayaran/{idPesanan}/{idProduk}/{idPengiriman}/{idBahan}', [PembayaranController::class, 'showData'])->name('pembayaran.index');
Route::get('/listserviceUser', [serviceBaruController::class, 'listService'])->name('listService');
Route::post('/costumproduk/{idProduk}', [CostumProdukController::class, 'index'])->name('costumproduk.index');



Route::get('/pembayaran/transaksi/{idPesanan}', [PembayaranController::class, 'transaksi'])->name('pembayaran.transaksi');
Route::post('/pembayaran/transaksi', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::post('/produk/{idProduk}', [ProdukController::class, 'store'])->name('produk.store');





Route::get('/daftarpesanan', [DaftarPesananController::class, 'index'])->name('daftarpesanan.index');
Route::get('/riwayat', [DaftarPesananController::class, 'riwayat'])->name('daftarpesanan.riwayat');
Route::get('/riwayatService', [DaftarPesananController::class, 'riwayatService'])->name('daftarpesanan.riwayatService');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');



// Route::get('/serviceUser', function () {
//     return view('profilUser.service');
// });



// Route::get('/', [galeriController::class, 'index']);
Route::resource('/galeri', AdminProdukController::class);
Route::put('/galeri/{id}/update-gambar', [AdminProdukController::class, 'updateGambar'])->name('galeri.updateGambar');
Route::put('/profil/{id}/update-profil',[profilAdminController::class, 'updateProfil'])->name('profil.updateProfil');
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
Route::resource('/bahan', bahanController::class);
Route::resource('/pengiriman', pengirimanController::class);
Route::get('/jsPesananBaru/{id}/terima', [jaserPesananBaruController::class, 'terimaPesananService'])->name('terimaPesananService');
Route::get('/jsPesananBaru/{id}/tolak', [jaserPesananBaruController::class, 'tolakPesananService'])->name('tolakPesananService');
Route::get('/jsDalamProses/{id}',[jaserDalamProsesController::class, 'selesai'])->name('selesai');
Route::get('/cbPesananBaru/{id}/terima',[cusbarPesananBaruController::class, 'terimaPesanan'])->name('terimaPesanan');
Route::get('/cbPesananBaru/{id}/tolak',[cusbarPesananBaruController::class, 'tolakPesanan'])->name('tolakPesanan');
Route::get('/cbPesananBaru/{id}/verifikasiPembayaran',[cusbarDalamProsesController::class, 'verifikasiPembayaran'])->name('verifikasiPembayaran');
Route::put('/inputProgres/{id}/inputProgres',[cusbarDalamProsesController::class,'inputProgres'])->name('inputProgres');
Route::get('/selesai/{id}',[cusbarDalamProsesController::class,'selesai'])->name('selesai');




// Route::get('/galeri', [galeriController::class, 'index']);


Route::get('/service', function () {
    $slug = "service";
    return view('admin_konten.service', compact('slug'));
});

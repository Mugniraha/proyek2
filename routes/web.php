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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\kelolaKategoriController;





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
Route::put('/ubahPassword', [ChangePasswordController::class, 'ubahKataSandi'])->name('ubahKataSandi');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::post('/forgot-passwordUser', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-passwordUser/{token}', function (string $token) {
    return view('password.emailToken', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-passwordUser', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('loginIndex')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
Route::get('/lupaPassUser', [ChangePasswordController::class, 'edit'])->name('password.edit');


Route::post('/costumproduk', [CostumprodukController::class, 'store'])->name('costumproduk.store');

Route::get('/registerAdmin', [LoginAdminController::class, 'registerAdminIndex'])->name('registerAdminIndex');
Route::post('/registerAdmin', [LoginAdminController::class, 'registerAdminPost'])->name('registerAdminPost');
Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdminIndex'])->name('loginAdminIndex');
Route::post('/loginAdmin', [LoginAdminController::class, 'loginAdminPost'])->name('loginAdminPost');
// Route::put('/ubahpw', [LoginAdminController::class, 'changePassword'])->name('changePassword');
Route::put('/admin/{idAdmin}/change-password', [LoginAdminController::class, 'changePassword'])->name('changePassword');

Route::get('/lupaPassAdmin', [ChangePasswordController::class, 'editAdmin'])->name('editPassAdmin');
// Route::put('/ubahpw', [LoginAdminController::class, 'changePassword'])->name('changePassword');
Route::put('/admin/{idAdmin}/change-password', [LoginAdminController::class, 'changePassword'])->name('changePassword');
Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');

Route::post('/forgot-passwordAdmin', function (Request $request) {
    $request->validate(['emailAdmin' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('emailAdmin')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['emailAdmin' => __($status)]);
})->middleware('guest')->name('password.emailAdmin');

Route::get('/reset-passwordAdmin/{token}', function (string $token) {
    return view('password.emailTokenAdmin', ['token' => $token]);
})->middleware('guest')->name('password.resetAdmin');

Route::post('/reset-passwordAdmin', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'emailAdmin' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('emailAdmin', 'password', 'confirmation_password', 'token'),
        function (Admin $admin, string $password) {
            $admin->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $admin->save();

            event(new PasswordReset($admin));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('loginAdminIndex')->with('status', __($status))
                : back()->withErrors(['emailAdmin' => [__($status)]]);
})->middleware('guest')->name('password.updateAdmin');
Route::get('/lupaPassAdmin', [ChangePasswordController::class, 'editAdmin'])->name('editPassAdmin');


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
Route::put('/formOrder/{id}', [formJSController::class, 'show'])->name('formOrder.show');

Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi.index');

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
Route::resource('/kategori', kelolaKategoriController::class);
Route::get('/jsPesananBaru/{id}/terima', [jaserPesananBaruController::class, 'terimaPesananService'])->name('terimaPesananService');
Route::get('/jsPesananBaru/{id}/tolak', [jaserPesananBaruController::class, 'tolakPesananService'])->name('tolakPesananService');
Route::get('/jsDalamProses/{id}',[jaserDalamProsesController::class, 'selesaiService'])->name('selesaiService');
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

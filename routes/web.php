<?php

use App\Http\Controllers\Api\AcaraController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\SouvenirController;
use App\Http\Controllers\Api\GueststarController;
use App\Http\Controllers\Api\PendaftaranController;
use App\Http\Controllers\Api\SouvenirinputController;
use App\Http\Controllers\Api\UserController;
use App\Models\Souvenir;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homePage');
})->name('home');

Route::get('/home', function () {
    return view('homePage');
});

Route::get('/nav1', function () {
    return view('navbar/navbarHome');
});

Route::get('/nav2', function () {
    return view('navbar/navbarUser');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::post('actionLogin', [AuthController::class, 'Login'])->name('login');

Route::get('/register', function () {
    return view('registerPage');
});

Route::post('register/action', [AuthController::class, 'Register'])->name('register');
Route::get('register/verify/{verify_key}', [AuthController::class, 'verify'])->name('verify');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
    // return redirect('/login);
});

Route::get('/profile', function () {
    $data = [
        'nama' => 'Carolus Seto Arianto',
        'email' => 'seto123121@gmail.com',
        'tanggalLahir' => '12 Januari 2001',
        'password' => '12345678',
        'nomorTelepon' => '0895 4111 38466'
    ];

    return view('user/profile', $data);
});

// Route::get('/acara', function () {
//     return view('user/pendaftaranAcara');
// });

Route::get('/acara/{id}', [AcaraController::class, 'show']);

Route::get('/souvenir', function () {
    return view('user/souvenirPage');
});

Route::get('/adminnav', function () {
    return view('navbar/sidebarAdmin');
});

Route::get('/admin', function () {
    return view('admin/adminHomePage');
});

Route::get('/adminac', function () {
    return view('admin/adminAcaraPage');
});

Route::get('/adminsv', function () {
    return view('admin/souvenirAdmin');
});

Route::resource('adminac', AcaraController::class);
Route::get('/', [HomeController::class, 'showHome']);
Route::get('/home', [HomeController::class, 'showHome']);

Route::resource('pendaftaran', PendaftaranController::class);

Route::get('souvenir',[AcaraController::class, 'showAcaraSouve']);
Route::post('souvenir', [SouvenirinputController::class, 'store'])->name('transaksi.store');

Route::get('admin', [PendaftaranController::class, 'showHomeAdmin']);
Route::delete('adminac/pendaftaran/{id}', [PendaftaranController::class, 'hapusPendaftaran'])->name('adminac.hapusDaftar');
Route::put('adminac/pendaftaran/{id}', [PendaftaranController::class, 'verifBayar'])->name('adminac.verifBayar');

Route::get('nav1', [AcaraController::class, 'showNav']);
Route::get('nav2', [AcaraController::class, 'showNavUser']);

Route::get('profile',[PendaftaranController::class, 'showPendaftarbyUser']);

Route::get('adminsv', [AcaraController::class, 'showInSouvenir']);
Route::post('adminsv', [SouvenirController::class, 'store'])->name('adminsv.store');
Route::get('adminsv/{id}',[SouvenirController::class, 'show']);
Route::put('adminsv/{id}',[SouvenirController::class, 'update'])->name('adminsv.update');
Route::delete('adminsv/{id}',[SouvenirController::class, 'destroy'])->name('adminsv.destroy');

Route::get('admings', [AcaraController::class, 'showGuest']);
Route::post('admings', [GueststarController::class, 'store'])->name('admings.store');
Route::delete('admings/{id}',[GueststarController::class, 'destroy'])->name('admings.destroy');

Route::get('adminuser', [UserController::class, 'fetchAllUser']);
Route::put('adminuser/{id}',[UserController::class, 'updateUserById'])->name('adminuser.update');
Route::delete('adminuser/{id}',[UserController::class, 'deleteUserById'])->name('adminuser.destroy');
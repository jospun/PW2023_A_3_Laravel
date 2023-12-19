<?php

use App\Http\Controllers\Api\AcaraController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\PendaftaranController;
use App\Http\Controllers\Api\SouvenirController;
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

Route::get('/register', function () {
    return view('registerPage');
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


Route::get('/acara', function () {
    return view('user/pendaftaranAcara');
});

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
Route::get('admin', [PendaftaranController::class, 'showHomeAdmin']);
Route::delete('adminac/pendaftaran/{id}', [PendaftaranController::class, 'hapusPendaftaran'])->name('adminac.hapusDaftar');
Route::put('adminac/pendaftaran/{id}', [PendaftaranController::class, 'verifBayar'])->name('adminac.verifBayar');

Route::get('nav1', [AcaraController::class, 'showNav']);

Route::get('adminsv', [AcaraController::class, 'showInSouvenir']);
Route::post('adminsv', [SouvenirController::class, 'store'])->name('adminsv.store');
Route::get('adminsv/{id}',[SouvenirController::class, 'show']);
Route::put('adminsv/{id}',[SouvenirController::class, 'update'])->name('adminsv.update');;
Route::delete('adminsv/{id}',[SouvenirController::class, 'destroy'])->name('adminsv.destroy');;

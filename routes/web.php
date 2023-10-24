<?php

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

Route::get('/home', function () {
    return view('homePage');
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

    return view('profile', $data);
});


Route::get('/acara', function () {
    return view('pendaftaranAcara');
});

Route::get('/souvenir', function () {
    return view('souvenirPage');
});
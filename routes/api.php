<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']); // Done
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']); // Done
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

Route::middleware('auth:api')->group(function () {

    // ACARA
    Route::get('/acara', [App\Http\Controllers\Api\AcaraController::class, 'index']); // Data Flow Done (Can catch all Acara Data)
    Route::post('/acara', [App\Http\Controllers\Api\AcaraController::class, 'store']); // Data Flow Done (Can create new Acara)
    Route::get('/acara/{id}', [App\Http\Controllers\Api\AcaraController::class, 'show']); // Data Flow Done (Can catch one Acara Data By Spesific ID)
    Route::put('/acara/{id}', [App\Http\Controllers\Api\AcaraController::class, 'update']); // Data Flow Done (Can update one Acara Data By Spesific ID)
    Route::delete('/acara/{id}', [App\Http\Controllers\Api\AcaraController::class, 'destroy']); // Data Flow Done (Can delete one Acara Data By Spesific ID)

    // Flow Data Testing
    Route::get('/acaraFetchAll', [App\Http\Controllers\Api\AcaraController::class, 'fetchAllAcara']); // Done

    // PENDAFTARAN
    Route::get('/pendaftaran', [App\Http\Controllers\Api\PendaftaranController::class, 'index']); // Data Flow Done (Can catch all Pendaftaran Data)
    Route::post('/pendaftaran', [App\Http\Controllers\Api\PendaftaranController::class, 'store']); // Data Flow Done (Can create new Pendaftaran)
    Route::get('/pendaftaran/{id}', [App\Http\Controllers\Api\PendaftaranController::class, 'show']); // Data Flow Done (Can catch one Pendaftaran Data By Spesific ID)
    Route::put('/pendaftaran/{id}', [App\Http\Controllers\Api\PendaftaranController::class, 'update']); // Buat Apa Njay Update ?
    Route::delete('/pendaftaran/{id}', [App\Http\Controllers\Api\PendaftaranController::class, 'destroy']); // Data Flow Done (Can delete one Pendaftaran Data By Spesific ID)

    // Flow Data Testing
    Route::get('/pendaftaranFetchAll', [App\Http\Controllers\Api\PendaftaranController::class, 'fetchAllPendaftaran']); // Done

    // SOUVENIR
    Route::get('/souvenir', [App\Http\Controllers\Api\SouvenirController::class, 'index']); // Data Flow Done (Can catch all Souvenir Data)
    Route::post('/souvenir', [App\Http\Controllers\Api\SouvenirController::class, 'store']); // Data Flow Done (Can create new Souvenir && Store Image in Public Images)
    Route::get('/souvenir/{id}', [App\Http\Controllers\Api\SouvenirController::class, 'show']); // Data Flow Done (Can catch one Souvenir Data By Spesific ID && Show Image)
    Route::put('/souvenir/{id}', [App\Http\Controllers\Api\SouvenirController::class, 'update']); // Data Flow Done (Can update one Souvenir Data By Spesific ID)
    Route::delete('/souvenir/{id}', [App\Http\Controllers\Api\SouvenirController::class, 'destroy']); // Data Flow Done (Can delete one Souvenir Data By Spesific ID)

    // Flow Data Testing
    Route::get('/souvenirFetchAll', [App\Http\Controllers\Api\SouvenirController::class, 'fetchAllSouvenir']); // Done

    // TRANSAKSI
    Route::get('/transaksi',[App\Http\Controllers\Api\TransaksiController::class,'index']); // Data Flow Done (Can catch all Transaksi Data)
    Route::post('/transaksi',[App\Http\Controllers\Api\TransaksiController::class,'store']); // Data Flow Done (Can create Empty new Transaksi)
    Route::get('/transaksi/{id}',[App\Http\Controllers\Api\TransaksiController::class,'show']); // Data Flow Done (Can catch one Transaksi Data By Spesific ID)
    Route::put('/transaksi/{id}',[App\Http\Controllers\Api\TransaksiController::class,'update']); // Keknya gk guna
    Route::delete('/transaksi/{id}',[App\Http\Controllers\Api\TransaksiController::class,'destroy']); // Data Flow Done (Can delete one Transaksi Data By Spesific ID)

    // DETAIL TRANSAKSI
    Route::get('/detailtrans',[App\Http\Controllers\Api\DetailTransController::class,'index']); // Data Flow Done (Can catch all Detail Transaksi Data)
    Route::post('/detailtrans',[App\Http\Controllers\Api\DetailTransController::class,'store']); // Data Flow Done (Can create new Detail Transaksi)
    Route::get('/detailtrans/{id}',[App\Http\Controllers\Api\DetailTransController::class,'show']); // Data Flow Done (Can catch one Detail Transaksi Data By Spesific ID)
    Route::put('/detailtrans/{id}',[App\Http\Controllers\Api\DetailTransController::class,'update']); // Buat Apa Njay Update ?
    Route::delete('/detailtrans/{id}',[App\Http\Controllers\Api\DetailTransController::class,'destroy']); // Data Flow Done (Can delete one Detail Transaksi Data By Spesific ID)
});

// Testing Fetch All User
Route::get('/users',[App\Http\Controllers\Api\UserController::class,'fetchAllUser']); // Done
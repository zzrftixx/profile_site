<?php

use App\Http\Controllers\OngkirController;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome', ['string'=>'ini dokumentasi']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['about'=>'mahasiswa politeknik negri banyuwangi']);
});

// ===================== campus ============================ //

Route::get('/testing', function () {
    return view('study_testing');
});

Route::get('/dosen', function () {
    return view('study_dosen');
});

Route::get('/pengguna',[PenggunaController::class,'get']);
Route::post('/pengguna',[PenggunaController::class,'insert']);

Route::get('/provinsi',[OngkirController::class,'listProvinsi']);
Route::get('/provinsi/{id}',[OngkirController::class,'getProvinsi']);
Route::get('/city',[OngkirController::class,'listCity']);
Route::get('/city/{id}',[OngkirController::class,'getCity']);


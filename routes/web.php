<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
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
    return view('selamat_datang');
});

Route::get('hello ', function () {
    return "Hello, Welcome to My First Laravel www.fardiansyah.id";
});

Route::get("blog", function () {
    return view("blog");
});

Route::get("dosen", [DosenController::class, 'index']);

Route::get('pegawai', [PegawaiController::class, 'index']);

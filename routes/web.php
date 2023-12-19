<?php

use App\Http\Controllers\AcademyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('selamat_datang');
// });

Route::get('hello ', function () {
    return "Hello, Welcome to My First Laravel www.fardiansyah.id";
});

Route::get("/", [BlogController::class, 'index']);

Route::get("blog/about-us", [BlogController::class, 'about_us']);

Route::get("blog/contact-us", [BlogController::class, 'contact_us']);

Route::get("dosen", [DosenController::class, 'index']);

Route::get('pegawai/{name}', [PegawaiController::class, 'index']);

Route::get('formulir', [PegawaiController::class, 'formulir']);

Route::post('formulir/proses', [PegawaiController::class, 'proses']);

Route::get('academy', [AcademyController::class, 'index']);

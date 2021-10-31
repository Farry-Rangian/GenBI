<?php

use App\Models\Artikel;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\GaleriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/biodata', [UserController::class, 'index']);

Route::get('/kegiatans', [KegiatanController::class, 'index']);

Route::get('/kegiatans/{kegiatan}', [KegiatanController::class, 'show']);

Route::get('/presensi/{user}', [PresensiController::class, 'show']);

Route::get('/galeris', [GaleriController::class, 'index']);

Route::get('/galeris/{galeri}', [GaleriController::class, 'show']);

Route::get('/artikel', [ArtikelController::class, 'index']);

//halaman single artikel
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show']);


Route::get('/struktur-kepengurusan', function () {
    return view('struktur', [
        "title" => "Struktur Kepengurusan"
    ]);
});
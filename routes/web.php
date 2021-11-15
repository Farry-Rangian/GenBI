<?php

use App\Models\Artikel;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUjianController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardJawabanController;
use App\Http\Controllers\DashboardKegiatanController;
use App\Http\Controllers\DashboardPresensiController;
use App\Http\Controllers\DashboardPertanyaanController;

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

Route::get('/kegiatans/{kegiatan:slug}', [KegiatanController::class, 'show']);

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/artikels/checkSlug', [DashboardArtikelController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/kegiatans/checkSlug', [DashboardKegiatanlController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/artikels', DashboardArtikelController::class)->middleware('auth');
Route::resource('/dashboard/kegiatans', DashboardKegiatanController::class)->middleware('auth');
Route::resource('/dashboard/presensi', DashboardPresensiController::class)->middleware('auth');
Route::get('/dashboard/ujian', [DashboardUjianController::class, 'index'])->middleware('auth');
Route::get('/dashboard/ujian/create', [DashboardUjianController::class, 'create'])->middleware('auth');
Route::post('/dashboard/ujian/create', [DashboardUjianController::class, 'store'])->middleware('auth');
Route::resource('/dashboard/ujian/pertanyaan', DashboardPertanyaanController::class)->middleware('auth');
Route::get('/dashboard/ujian/jawaban', [DashboardJawabanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/ujian/jawaban/{jawaban}', [DashboardJawabanController::class, 'show'])->middleware('auth');
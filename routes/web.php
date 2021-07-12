<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\SpaldController;
use App\Http\Controllers\DataRumahController;
use App\Http\Controllers\KoordinatController;
use App\Http\Controllers\TargetCapaianController;
use App\Http\Controllers\RealisasiCapaianController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FotoController;
use Spatie\Sitemap\SitemapGenerator;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

//Kecamatan
Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
Route::get('/kecamatan/add', [KecamatanController::class, 'add']);
Route::post('/kecamatan/insert', [KecamatanController::class, 'insert']);
Route::get('/kecamatan/edit/{id_kec}', [KecamatanController::class, 'edit']);
Route::get('/kecamatan/delete/{id_kec}', [KecamatanController::class, 'delete']);
Route::post('/kecamatan/update/{id_kec}', [KecamatanController::class, 'update']);

//Desa
Route::get('/desa/{id_kec}', [DesaController::class, 'index'])->name('desa');
Route::get('/desa/add/{id_kec}', [DesaController::class, 'add'])->name('addDesa');
Route::post('/desa/insert', [DesaController::class, 'insert']);
Route::get('/desa/edit/{id_desa}', [DesaController::class, 'edit']);
Route::get('/desa/delete/{id_desa}', [DesaController::class, 'delete']);
Route::post('/desa/update/{id_desa}', [DesaController::class, 'update']);

//SPALD
Route::get('/spald', [SpaldController::class, 'index'])->name('spald');
Route::get('/spald/input', [SpaldController::class, 'add']);
Route::post('/spald/insert', [SpaldController::class, 'insert']);
Route::get('/spald/desa/{id_kec}', [SpaldController::class, 'getdesa']);
Route::get('/spald/edit/{id_spald}', [SpaldController::class, 'edit']);
Route::get('/spald/delete/{id_spald}', [SpaldController::class, 'delete']);
Route::post('/spald/update/{id_spald}', [SpaldController::class, 'update']);

//Data Rumah
Route::get('/rumah', [DataRumahController::class, 'index'])->name('rumah');
Route::get('/rumah/add', [DataRumahController::class, 'add']);
Route::post('/rumah/insert', [DataRumahController::class, 'insert']);
Route::get('/rumah/edit/{id_desa}', [DataRumahController::class, 'edit']);
Route::group(['middleware' => ['role:Master']], function () {
    Route::get('/rumah/delete/{id_desa}', [DataRumahController::class, 'delete']);

});
Route::post('/rumah/update/{id_desa}', [DataRumahController::class, 'update']);

//Data Koordinat
Route::get('/koordinat', [KoordinatController::class, 'index'])->name('koordinat');
Route::get('/koordinat/add', [KoordinatController::class, 'add']);
Route::post('/koordinat/insert', [KoordinatController::class, 'insert']);
Route::get('/koordinat/edit/{id_koordinat}', [KoordinatController::class, 'edit']);
Route::get('/koordinat/delete/{id_koordinat}', [KoordinatController::class, 'delete']);
Route::post('/koordinat/update/{id_koordinat}', [KoordinatController::class, 'update']);

//Target Capaian
Route::get('/target', [TargetCapaianController::class, 'index'])->name('target');
Route::get('/target/add', [TargetCapaianController::class, 'add']);
Route::post('/target/insert', [TargetCapaianController::class, 'insert']);
Route::get('/target/edit/{id_capaian}', [TargetCapaianController::class, 'edit']);
Route::get('/target/delete/{id_capaian}', [TargetCapaianController::class, 'delete']);
Route::post('/target/update/{id_capaian}', [TargetCapaianController::class, 'update']);

//Target Realisasi
Route::get('/realisasi', [RealisasiCapaianController::class, 'index'])->name('realisasi');
Route::get('/realisasi/add', [RealisasiCapaianController::class, 'add']);
Route::post('/realisasi/insert', [RealisasiCapaianController::class, 'insert']);
Route::get('/spald/kec/{id_spald}', [SpaldController::class, 'getkec']);
Route::get('/realisasi/edit/{id_capaian}', [RealisasiCapaianController::class, 'edit']);
Route::get('/realisasi/delete/{id_capaian}', [RealisasiCapaianController::class, 'delete']);
Route::post('/realisasi/update/{id_capaian}', [RealisasiCapaianController::class, 'update']);

//Foto Realisasi
Route::get('/foto/spald', [FotoController::class, 'index'])->name('foto');
Route::get('/dokumentasi/{id_spald}', [FotoController::class, 'detail']);
Route::get('/foto/tambah', [FotoController::class, 'add']);
Route::post('/foto/insert', [FotoController::class, 'insert']);
Route::get('/foto/edit/{id_foto}', [FotoController::class, 'edit']);
Route::get('/foto/delete/{id_foto}', [FotoController::class, 'delete']);
Route::post('/foto/update/{id_foto}', [FotoController::class, 'update']);

Route::group(['middleware' => ['role:Super Admin']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

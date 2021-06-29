<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\SpaldController;
use App\Http\Controllers\DataRumahController;
use App\Http\Controllers\KoordinatController;
use App\Http\Controllers\TargetCapaianController;
use App\Http\Controllers\RealisasiCapaianController;






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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//kecamatan
Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
Route::get('/kecamatan/add', [KecamatanController::class, 'add']);
Route::post('/kecamatan/insert', [KecamatanController::class, 'insert']);
Route::get('/kecamatan/edit/{id_kec}', [KecamatanController::class, 'edit']);
Route::get('/kecamatan/delete/{id_kec}', [KecamatanController::class, 'delete']);
Route::post('/kecamatan/update/{id_kec}', [KecamatanController::class, 'update']);

//desa
Route::get('/desa/{id_kec}', [DesaController::class, 'index'])->name('desa');
Route::get('/desa/add', [DesaController::class, 'add']);
Route::post('/desa/insert', [DesaController::class, 'insert']);
Route::get('/desa/edit/{id_desa}', [DesaController::class, 'edit']);
Route::get('/desa/delete/{id_desa}', [DesaController::class, 'delete']);
Route::post('/desa/update/{id_desa}', [DesaController::class, 'update']);

//spald
Route::get('/spald', [SpaldController::class, 'index'])->name('spald');
Route::get('/spald/add', [SpaldController::class, 'add']);
Route::post('/spald/insert', [SpaldController::class, 'insert']);
Route::get('/spald/edit/{id_desa}', [SpaldController::class, 'edit']);
Route::get('/spald/delete/{id_desa}', [SpaldController::class, 'delete']);
Route::post('/spald/update/{id_desa}', [SpaldController::class, 'update']);

//rumah
Route::get('/rumah', [DataRumahController::class, 'index'])->name('spald');
Route::get('/rumah/add', [DataRumahController::class, 'add']);
Route::post('/rumah/insert', [DataRumahController::class, 'insert']);
Route::get('/rumah/edit/{id_desa}', [DataRumahController::class, 'edit']);
Route::get('/rumah/delete/{id_desa}', [DataRumahController::class, 'delete']);
Route::post('/rumah/update/{id_desa}', [DataRumahController::class, 'update']);

//koordinat
Route::get('/koordinat', [KoordinatController::class, 'index'])->name('spald');
Route::get('/koordinat/add', [KoordinatController::class, 'add']);
Route::post('/koordinat/insert', [KoordinatController::class, 'insert']);
Route::get('/koordinat/edit/{id_desa}', [KoordinatController::class, 'edit']);
Route::get('/koordinat/delete/{id_desa}', [KoordinatController::class, 'delete']);
Route::post('/koordinat/update/{id_desa}', [KoordinatController::class, 'update']);

//koordinat
Route::get('/target', [TargetCapaianController::class, 'index'])->name('spald');
Route::get('/target/add', [TargetCapaianController::class, 'add']);
Route::post('/target/insert', [TargetCapaianController::class, 'insert']);
Route::get('/target/edit/{id_desa}', [TargetCapaianController::class, 'edit']);
Route::get('/target/delete/{id_desa}', [TargetCapaianController::class, 'delete']);
Route::post('/target/update/{id_desa}', [TargetCapaianController::class, 'update']);

//realisasi
Route::get('/realisasi', [RealisasiCapaianController::class, 'index'])->name('spald');
Route::get('/realisasi/add', [RealisasiCapaianController::class, 'add']);
Route::post('/realisasi/insert', [RealisasiCapaianController::class, 'insert']);
Route::get('/realisasi/edit/{id_desa}', [RealisasiCapaianController::class, 'edit']);
Route::get('/realisasi/delete/{id_desa}', [RealisasiCapaianController::class, 'delete']);
Route::post('/realisasi/update/{id_desa}', [RealisasiCapaianController::class, 'update']);
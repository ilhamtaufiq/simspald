<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\IpaldController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\SpmController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\BotManController;






Route::get('kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
Route::get('desa/{id_kec}', [DesaController::class, 'index'])->name('desa');

Route::get('spm', [SpmController::class, 'index'])->name('spm');





// Route::get('spald', [IpaldController::class, 'index'])->name('spald');
// Route::get('spald/tambah', [IpaldController::class, 'create'])->name('spald.tambah');
// Route::get('spald/edit/{id_spald}', [IpaldController::class, 'edit'])->name('spald.edit');
// Route::post('spald/update/{id_spald}', [IpaldController::class, 'update']);
// Route::post('spald/insert', [IpaldController::class, 'store']);
// Route::get('spald/hapus/{id_spald}', [IpaldController::class, 'destroy'])->name('spald.hapus');
Route::get('/spald/desa/{id_kec}', [IpaldController::class, 'getdesa']);
Route::get('/spald/rincian/{id_kegiatan}', [IpaldController::class, 'getRincianKegiatan']);
Route::get('/spald/get/{id_spald}', [IpaldController::class, 'getSpald']);


Route::resource('rumah', RumahController::class);
Route::resource('pengelola', PengelolaController::class);
Route::resource('outcome', OutcomeController::class);
Route::resource('output', OutputController::class);
Route::resource('spald', IpaldController::class);
Route::resource('map', MapController::class);















Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function(){
    return redirect()->route('default');
})->name('/');

Route::view('layout-light', 'starterkit.layout-light')->name('layout-light');
Route::view('layout-dark', 'starterkit.layout-dark')->name('layout-dark');
Route::view('sidebar-fixed', 'starterkit.sidebar-fixed')->name('sidebar-fixed');
Route::view('boxed', 'starterkit.boxed')->name('boxed');
Route::view('layout-rtl', 'starterkit.layout-rtl')->name('layout-rtl');
Route::view('vertical', 'starterkit.vertical')->name('vertical');
Route::view('mega-menu', 'starterkit.mega-menu')->name('mega-menu');


Route::prefix('dashboard')->group(function () {
	Route::get('default', [DashboardController::class, 'index'])->name('default');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
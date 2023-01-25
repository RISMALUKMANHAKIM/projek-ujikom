<?php

use App\Http\Controllers\DataanakController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(
    [
        'register' => false,
    ]
);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });
    Route::get('profile', function () {
        return 'halaman profile admin';
    });

    Route::resource('dataanak', DataanakController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('kebutuhan', KebutuhanController::class);
    Route::resource('donasi', DonasiController::class);

    Route::get('/cetak-laporan', 'App\Http\Controllers\DonasiController@cetakForm')->name('cetak-laporan');
    Route::get('/cetak-laporan-pertanggal/{tglawal}/{tglakhir}',
        'App\Http\Controllers\DonasiController@cetakPertanggal')
        ->name('cetak-laporan-pertanggal');

});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('kontak', function () {
    return view('frontend.kontak');
});
Route::get('kegiatan', 'App\Http\Controllers\FrontendController@kegiatanya', function () {
    return view('frontend.kegiatan');
});

Route::get('kebutuhan', 'App\Http\Controllers\FrontendController@kebutuhanya', function () {
    return view('frontend.kebutuhan');
});

Route::get('donasi/create', 'App\Http\Controllers\FrontendController@donasi', function () {
    return view('frontend.donasi'); 
})->name('createDonasi');

Route::post('donasi', 'App\Http\Controllers\FrontendController@storeDonasi', function () {
    return view('frontend.donasi');
})->name('storeDonasi');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\KursiController;
// use App\Http\Controllers\TiketController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\StudioController;
// use App\Http\Controllers\QRCodeController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', 'Auth\LoginController@login')->middleware('admin');

Route::resource('category', CategoryController::class);
Route::resource('movies', MoviesController::class);
Route::resource('kursi', KursiController::class);
// Route::resource('tiket', TiketController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('user', UserController::class);
Route::resource('status', StatusController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('studio', StudioController::class);

// qr
Route::get('/generate-qrcode', [App\Http\Controllers\QrCodeController::class, 'index']);


// Route::get('/', 'QRCodeController@index');



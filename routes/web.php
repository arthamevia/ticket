<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\JadwalController;

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
Route::post('/login', 'Auth\LoginController@login')->middleware('admin');

Route::resource('category', CategoryController::class);
Route::resource('movies', MoviesController::class);
Route::resource('kursi', KursiController::class);
Route::resource('tiket', TiketController::class);
Route::resource('jadwal', JadwalController::class);

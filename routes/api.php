<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestingController;
use App\Http\Controllers\Api\MoviesController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\StudioController;
use App\Http\Controllers\Api\KursiController;
use App\Http\Controllers\Api\JadwalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('test', [TestingController::class,'test']);

// movie
Route::get('Movies', [MoviesController::class,'index']);
Route::post('Movies/create', [MoviesController::class, 'store']);
Route::get('Movies/{id}', [MoviesController::class, 'show']);
Route::put('Movies/{id}/edit', [MoviesController::class, 'update']);
Route::delete('Movies/{id}', [MoviesController::class, 'destroy']);

// category
Route::get('Category', [CategoryController::class,'index']);
Route::post('Category/create', [CategoryController::class, 'store']);
Route::get('Category/{id}', [CategoryController::class, 'show']);
Route::put('Category/{id}/edit', [CategoryController::class, 'update']);
Route::delete('Category/{id}', [CategoryController::class, 'destroy']);

// Studio
Route::get('Studio', [StudioController::class,'index']);
Route::post('Studio/create', [StudioController::class, 'store']);
Route::get('Studio/{id}', [StudioController::class, 'show']);
Route::put('Studio/{id}/edit', [StudioController::class, 'update']);
Route::delete('Studio/{id}', [StudioController::class, 'destroy']);

// Studio
Route::get('Kursi', [KursiController::class,'index']);
Route::post('Kursi/create', [KursiController::class, 'store']);
Route::get('Kursi/{id}', [KursiController::class, 'show']);
Route::put('Kursi/{id}/edit', [KursiController::class, 'update']);
Route::delete('Kursi/{id}'  , [KursiController::class, 'destroy']);

// Jadwal
Route::get('Jadwal', [JadwalController::class,'index']);
Route::post('Jadwal/create', [JadwalController::class, 'store']);
Route::get('Jadwal/{id}', [JadwalController::class, 'show']);
Route::put('Jadwal/{id}/edit', [JadwalController::class, 'update']);
Route::delete('Jadwal/{id}'  , [JadwalController::class, 'destroy']);

// Authentikasi

// Route::post('/register', RegisterController::class)->name('register');
// Route::post('/login', LoginController::class)->name('login');
// Route::post('/logout', LogoutController::class)->name('logout');

// category

// Route::get('category', [CategoryController::class, 'index']);
// Route::post('category/create', [CategoryController::class, 'store']);
// Route::get('category/{id}', [CategoryController::class, 'show']);
// Route::put('category/{id}/edit', [CategoryController::class, 'update']);
// Route::delete('category/{id}', [CategoryController::class, 'destroy']);

// movies


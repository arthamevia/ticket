<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestingController;
use App\Http\Controllers\Api\MoviesController;

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


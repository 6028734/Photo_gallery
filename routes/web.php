<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/albums/{id}', [IndexController::class, 'photosPerAlbumId'])->where('id', '[0-9]+');
Route::get('/dashboard/albums/editAlbum/{id}', [DashboardController::class, 'photosByAlbumId'])->where('id', '[0-9]+');
Route::get('/dashboard/albums/selectPhotobyalbum/{id}', [DashboardController::class, 'selectPhotobyalbum'])->where('id', '[0-9]+');
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/dashboard/albums', [DashboardController::class, 'albums']);
Route::post('/dashboard/insertAlbum', [DashboardController::class, 'insertAlbum']);
Route::get('/login', [AccountController::class, 'login']);
Route::post('/login', [AccountController::class, 'validateLogin']);


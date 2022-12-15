<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::post('/upload', [App\Http\Controllers\MainController::class, 'upload'])->name('upload');
Route::get('/prediction/{prediction}', [App\Http\Controllers\MainController::class, 'prediction'])->name('prediction');
Route::get('/error/{prediction}', [App\Http\Controllers\MainController::class, 'error'])->name('error');
Route::get('history', [App\Http\Controllers\MainController::class, 'history'])->name('history');

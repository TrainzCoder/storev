<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('/login')->name('login.')->group(function () {
  Route::get('/', [LoginController::class, 'index'])->name('index');
  Route::post('/proses', [LoginController::class, 'proses'])->name('proses');
});
Route::prefix('/register')->name('register.')->group(function () {
  Route::get('/', [RegisterController::class, 'index'])->name('index');
  Route::post('/proses', [RegisterController::class, 'proses'])->name('proses');
});
Route::view('/reset', 'reset')->name('reset');

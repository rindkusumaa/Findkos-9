<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\FasilitasController;

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

Route::resource('/' , LandingController::class);
Route::get('details', [LandingController::class, 'details'])->name('landing.details');
Route::get('payment', [LandingController::class, 'payment'])->name('landing.payment');

Auth::routes();
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('pembayarans', PembayaranController::class);
Route::resource('kamars', KamarController::class);
Route::resource('penghunis', PenghuniController::class);
Route::resource('fasilitas', FasilitasController::class);

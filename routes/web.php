<?php

use App\Http\Controllers\AdminbookingController;
use App\Http\Controllers\AdminkasirController;
use App\Http\Controllers\AdminpembeliController;
use App\Http\Controllers\AdmintiketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use App\Models\Pembeli;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function() {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::resource('apembeli', AdminpembeliController::class);
        Route::resource('atiket', AdmintiketController::class);
        Route::resource('abooking', AdminbookingController::class);
        Route::resource('user', UserController::class);
        Route::resource('atransaksi', AdminkasirController::class);
    });

 Route::group(['prefix' => 'user', 'middleware' => ['auth','role:member']],
    function() {
        Route::get('/', function () {
            return view('member.index');
        });
        Route::resource('pembeli', PembeliController::class);
        Route::resource('tiket', TiketController::class);
        Route::resource('booking', BookingController::class);
        Route::resource('transaksi', KasirController::class);
    });

 Route::group(['prefix' => 'petugas', 'middleware' => ['auth','role:petugas']],
    function() {
        Route::get('/', function () {
            return view('petugas.index');
        });
        Route::resource('kereta', KeretaController::class);
    });

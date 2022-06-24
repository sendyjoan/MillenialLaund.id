<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CabangController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MesinController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanIndex;

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
    return view('index');
});



Route::get('/bahan', function () {
    return view('alatBahan');
});

Route::get('/chartUser', function () {
    return view('chart');
});

Route::get('/edit', function () {
    return view('editProfile');
});

Route::get('/index/ourservice', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::middleware(['auth', 'isAdmin'])->group(function(){
        Route::get('/home', [HomeController::class, 'index']);
        Route::put('/update_profile', [HomeController::class, 'update_profile']);
        Route::put('/update_password', [HomeController::class, 'update_password']);

        Route::resource('cabang', CabangController::class);
        Route::resource('product', ProductController::class);
        Route::resource('mesin', MesinController::class);
        Route::put('/mesin/{id}/tersedia', [MesinController::class, 'tersedia']);
        Route::put('/mesin/{id}/untersedia', [MesinController::class, 'untersedia']);
        Route::resource('user', UserController::class);
        Route::resource('booking', BookingController::class);
        Route::resource('role', RoleController::class);
        Route::resource('user', UserController::class);    
});

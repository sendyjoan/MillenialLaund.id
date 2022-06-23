<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::middleware(['auth', 'isAdmin'])->group(function(){

        Route::get('/home', function () {
            return view('admin.home.index');
        });

        Route::get('/cabang', function () {
            $data = [];
            return view('admin.cabang.index', compact('data'));
        });

        Route::get('/cabang/create', function () {
            $data = [];
            return view('admin.cabang.create', compact('data'));
        });

        Route::get('/cabang/edit', function () {
            $data = ['id' => 1, 'cabang' => 'jkjk'];
            return view('admin.cabang.edit', compact('data'));
        });

        Route::get('/product', function () {
            $data = [];
            return view('admin.product.index',compact('data'));
        });

        Route::get('/product/create', function () {
            $data = [];
            return view('admin.product.create',compact('data'));
        });

        Route::get('/product/edit', function () {
            $data = [];
            return view('admin.product.edit',compact('data'));
        });

        Route::get('/reward', function () {
            $data = [];
            return view('admin.reward.index',compact('data') );
        });

        Route::get('/transaksi', function () {
            $data = [];
            return view('admin.transaksi.index', compact('data'));
        });

        Route::get('/user', function () {
            $data = [];
            return view('admin.user.index', compact('data'));
        });
});

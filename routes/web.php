<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLevel;
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

Route::group(['middleware' => ['auth','checkLevel:admin']], function(){
    // Data Master (User)
    Route::get('/user', [UserController::class, 'index']);
    // Data Master (Kategori)
    Route::get('/kategori', [KategoriController::class, 'index']);
    // Data Master (Barang)
    Route::get('/barang', [BarangController::class, 'index']);

});

Route::get('/', function () {
    return view('home');
});

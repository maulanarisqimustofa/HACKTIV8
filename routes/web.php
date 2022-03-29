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
use App\Http\Controllers\user\indexcontroller;
Route::get('/', [indexcontroller::class,'index']);

use App\Http\Controllers\user\productcontroller;
Route::get('/product', [productcontroller::class,'index'])
->name('user.product');

Route::get('/product.{id}', [productcontroller::class,'show']);

use App\Http\Controllers\user\categorycontroller;
Route::get('/category', [categorycontroller::class,'index'])
->name('user.category');

use App\Http\Controllers\user\connectcontroller;
Route::get('/connect', [connectcontroller::class,'index'])
->name('user.connect');

use App\Http\Controllers\user\aboutuscontroller;
Route::get('/aboutus', [aboutuscontroller::class,'index'])
->name('user.aboutus');

use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);

use App\Http\Controllers\admin\profilcontroller;
Route::middleware('auth')->group(function () {
    Route::get('/profil', [profilcontroller::class,'index'])
    ->name('admin.profil');
});

Route::get('/profil.{id}.edit', [profilcontroller::class,'edit']);

Route::put('/profil.{id}', [profilcontroller::class,'update']);

Route::post('/logout', [LoginController::class,'logout']);
Route::get('/logout', [LoginController::class,'logout']);

use App\Http\Controllers\admin\kategoricontroller;
Route::get('/kategori', [kategoricontroller::class,'index'])
->name('admin.kategori');

Route::get('/kategori.cari', [kategoricontroller::class,'search']);

Route::get('/kategori.tambah', [kategoricontroller::class,'create']);

Route::post('/kategori', [kategoricontroller::class,'store']);

Route::get('/kategori.{id}.edit', [kategoricontroller::class,'edit']);

Route::put('/kategori.{id}', [kategoricontroller::class,'update']);

Route::delete('/kategori.{id}', [kategoricontroller::class,'destroy']);

use App\Http\Controllers\admin\produkcontroller;
Route::get('/produk', [produkcontroller::class,'index'])
->name('admin.produk');

Route::get('/produk.cari', [produkcontroller::class,'search']);

Route::get('/produk.tambah', [produkcontroller::class,'create']);

Route::post('/produk', [produkcontroller::class,'store']);

Route::get('/produk.{id}.edit', [produkcontroller::class,'edit']);

Route::put('/produk.{id}', [produkcontroller::class,'update']);

Route::delete('/produk.{id}', [produkcontroller::class,'destroy']);

use App\Http\Controllers\admin\produk1controller;
Route::get('/produk.massupload', [produk1controller::class,'create']);

Route::post('/produk1', [produk1controller::class,'store']);

use App\Http\Controllers\admin\ordercontroller;
Route::get('/order', [ordercontroller::class,'index'])
->name('admin.order');

Route::get('/order.cari', [ordercontroller::class,'search']);

Route::get('/order.tambah', [ordercontroller::class,'create']);

Route::delete('/order.{id}', [ordercontroller::class,'destroy']);

use App\Http\Controllers\admin\dashboardcontroller;
Route::get('/dashboard', [dashboardcontroller::class,'index'])->name('admin.dashboard');


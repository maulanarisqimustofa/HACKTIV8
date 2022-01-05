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

use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);

use App\Http\Controllers\Admin\ProfilController;
Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfilController::class,'index'])
    ->name('admin.profil');
});

Route::get('/profil.{id}.edit', [ProfilController::class,'edit']);

Route::put('/profil.{id}', [ProfilController::class,'update']);

Route::post('/logout', [LoginController::class,'logout']);
Route::get('/logout', [LoginController::class,'logout']);

use App\Http\Controllers\Admin\AboutController;
Route::get('/about', [AboutController::class,'index'])
->name('admin.about');

Route::get('/about.{id}.edit', [AboutController::class,'edit']);

Route::put('/about.{id}', [AboutController::class,'update']);

use App\Http\Controllers\Admin\WorkController;
Route::get('/work', [WorkController::class,'index'])
->name('admin.work');

Route::get('/work.cari', [WorkController::class,'search']);

Route::get('/work.tambah', [WorkController::class,'create']);

Route::post('/work', [WorkController::class,'store']);

Route::get('/work.{id}.edit', [WorkController::class,'edit']);

Route::put('/work.{id}', [WorkController::class,'update']);

Route::delete('/work.{id}', [WorkController::class,'destroy']);

use App\Http\Controllers\Admin\ContactController;
Route::get('/contact', [ContactController::class,'index'])
->name('admin.contact');

Route::get('/contact.{id}.edit', [ContactController::class,'edit']);

Route::put('/contact.{id}', [ContactController::class,'update']);

use App\Http\Controllers\Admin\AbilityController;
Route::get('/ability', [AbilityController::class,'index'])
->name('admin.ability');

Route::get('/ability.cari', [AbilityController::class,'search']);

Route::get('/ability.tambah', [AbilityController::class,'create']);

Route::post('/ability', [AbilityController::class,'store']);

Route::get('/ability.{id}.edit', [AbilityController::class,'edit']);

Route::put('/ability.{id}', [AbilityController::class,'update']);

Route::delete('/ability.{id}', [AbilityController::class,'destroy']);

use App\Http\Controllers\Admin\PortfolioController;
Route::get('/portfolio', [PortfolioController::class,'index'])
->name('admin.portfolio');

Route::get('/portfolio.cari', [PortfolioController::class,'search']);

Route::get('/portfolio.tambah', [PortfolioController::class,'create']);

Route::post('/portfolio', [PortfolioController::class,'store']);

Route::get('/portfolio.{id}.edit', [PortfolioController::class,'edit']);

Route::put('/portfolio.{id}', [PortfolioController::class,'update']);

Route::delete('/portfolio.{id}', [PortfolioController::class,'destroy']);

use App\Http\Controllers\Admin\LabsController;
Route::get('/labs', [LabsController::class,'index'])
->name('admin.labs');

Route::get('/labs.cari', [LabsController::class,'search']);

Route::get('/labs.tambah', [LabsController::class,'create']);

Route::post('/labs', [LabsController::class,'store']);

Route::get('/labs.{id}.edit', [LabsController::class,'edit']);

Route::put('/labs.{id}', [LabsController::class,'update']);

Route::get('/labs.{id}', [LabsController::class,'show']);

Route::delete('/labs.{id}', [LabsController::class,'destroy']);

use App\Http\Controllers\user\IndexController;
Route::get('/', [IndexController::class,'index']);

use App\Http\Controllers\user\WorksController;
Route::get('/works', [WorksController::class,'index'])
->name('user.works');

Route::get('/works.{id}', [WorksController::class,'show']);

use App\Http\Controllers\user\ConnectController;
Route::get('/connect', [ConnectController::class,'index'])
->name('user.connect');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/auth', [AuthController::class, 'view'])->name('login');
Route::get('/profil', [AuthController::class, 'viewProfil']);

Route::POST('/auth/login', [AuthController::class, 'authLogin']);
Route::get('/auth/redirect', [AuthController::class, 'redirectToProvider']);
Route::get('/auth/callback', [AuthController::class, 'handleProviderCallback']);
Route::POST('/auth/daftar', [AuthController::class, 'authDaftar']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/barang-lelang', [DashboardController::class, 'viewBarangLelang'])->middleware('auth');

Route::post('/dashboard/barang-lelang/save', [DashboardController::class, 'storeBarangLelang']);
Route::post('/dashboard/barang-lelang/edit/{barang:id_barang}', [DashboardController::class, 'editBarangLelang']);
Route::post('/dashboard/barang-lelang/delete', [DashboardController::class, 'deleteBarangLelang']);

Route::get('/barang/{id}', [HomeController::class, 'detailBarang'])->middleware('auth');
Route::post('/barang/buat-penawaran', [LelangController::class, 'buatPenawaranLelang']);


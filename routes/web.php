<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/auth', [AuthController::class, 'view']);

Route::POST('/auth/login', [AuthController::class, 'authLogin']);
Route::POST('/auth/daftar', [AuthController::class, 'authDaftar']);

Route::get('/logout', [AuthController::class, 'logout']);
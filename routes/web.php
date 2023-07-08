<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;

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

Route::get('/', [AuthController::class, 'indexUser'])->name('index');
Route::get('/auth/login', [AuthController::class, 'indexUserLogin'])->name('login');
Route::get('/auth/regis', [AuthController::class, 'indexUserRegis'])->name('register');
Route::post('/auth/regis', [AuthController::class, 'regisUser'])->middleware('guest');
Route::get('/auth/services', [AuthController::class, 'indexAdminLogin'])->middleware('guest');
Route::post('/auth/services', [AuthController::class, 'loginAdmin'])->middleware('guest');
Route::get('/logoutAdmin', [AuthController::class, 'logoutAdmin'])->name('admin.logout');

Route::resource('manage/admin', AdminController::class)->middleware('auth:admin');
Route::resource('manage/user', UserController::class)->middleware('auth:admin');
Route::resource('manage/car', CarController::class)->middleware('auth:admin');
Route::resource('manage/brand', BrandController::class)->middleware('auth:admin');
Route::resource('book', BookController::class);

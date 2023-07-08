<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/auth/login', [AuthController::class, 'indexLogin'])->name('login');
Route::get('/auth/regis', [AuthController::class, 'indexRegis'])->name('register');
Route::post('/auth/regis', [AuthController::class, 'regisUser']);

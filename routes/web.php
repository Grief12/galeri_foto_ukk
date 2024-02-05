<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionnnController;

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

// Route::get('/masuk',[HomeController::class,'masuk']);
// Route::get('/daftar',[HomeController::class,'daftar']);

Route::get('/login',[LoginController::class, 'loginView']);
Route::post('/login',[LoginController::class,'loginAction']);

Route::get('/',[HomeController::class,'indexView']);

Route::get('/register',[LoginController::class,'registView']);
Route::post('/register',[LoginController::class,'registAction']);

Route::get('/home',[HomeController::class,'homeView']);

Route::get('/logout',[LoginController::class,'logout']);
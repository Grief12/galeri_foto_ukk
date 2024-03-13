<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionnnController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;

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

//login
Route::get('/login',[LoginController::class, 'loginView']);
Route::post('/login',[LoginController::class,'loginAction']);

//tampilan index
Route::get('/',[HomeController::class,'indexView']);

//register
Route::get('/register',[LoginController::class,'registView']);
Route::post('/register',[LoginController::class,'registAction']);

//tampilan home
Route::get('/home',[HomeController::class,'homeView']);

//logout
Route::get('/logout',[LoginController::class,'logout']);

//album
Route::post('/make-album',[AlbumController::class,'makeAlbum']);
Route::post('/uploadgambar',[AlbumController::class,'uploadGambar']);
Route::get('/album/{id_album}',[AlbumController::class,'detailAlbum']);
Route::delete('/hapusfoto/{id}',[AlbumController::class,'hapusFoto'])->name('hapusFoto');

//profile
Route::get('/profile',[ProfileController::class,'profileView']);

//detail
Route::get('/detail/{id}',[DetailController::class,'detailFotoView']);

//like
Route::post('/detail/{id}/like', [DetailController::class, 'addLike'])->name('like.action');
Route::delete('/detail/{id}/unlike', [DetailController::class, 'unLike'])->name('unlike.action');

//komentar
Route::post('/detail/{id}/komentar', [DetailController::class, 'addKomentar'])->name('addKomen.action');

//download
Route::get('/detail/{file}','DetailController@download')->name('file.download');
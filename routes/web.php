<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\SearchController;
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

//register
Route::get('/register',[LoginController::class,'registView']);
Route::post('/register',[LoginController::class,'registAction']);

//index
Route::get('/',[HomeController::class,'indexView']);

//home
Route::get('/home',[HomeController::class,'homeView']);

//search
Route::get('/search',[SearchController::class,'searchView']);
Route::post('search',[SearchController::class,'cari'])->name('cari');

//logout
Route::get('/logout',[LoginController::class,'logout']);

//album
Route::post('/make-album',[AlbumController::class,'makeAlbum']);
Route::post('/uploadgambar',[AlbumController::class,'uploadGambar']);
Route::get('/album/{id_album}',[AlbumController::class,'detailAlbum']);
Route::delete('/hapusfoto/{id}',[AlbumController::class,'hapusFoto'])->name('hapusFoto');
Route::delete('/deleteAlbum',[AlbumController::class,'deleteAlbum'])->name('deleteAlbum');
Route::get('/download/{id}', [DetailController::class, 'downloadFoto']);
Route::put('/editFoto/{id}',[AlbumController::class,'editFoto'])->name('editFoto');


//profile
Route::get('/profile',[ProfileController::class,'profileView']);

//detail
Route::get('/detail/{id}',[DetailController::class,'detailFotoView']);

//like
Route::post('/detail/{id}/like', [DetailController::class, 'addLike'])->name('like.action');
Route::delete('/detail/{id}/unlike', [DetailController::class, 'unLike'])->name('unlike.action');

//komentar
Route::post('/detail/{id}/komentar', [DetailController::class, 'addKomentar'])->name('addKomen.action');
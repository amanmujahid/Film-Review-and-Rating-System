<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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


Route::get('/',[ProjectController::class, 'movies'])->name('movies');

Route::post('/write_review',[ProjectController::class,'write_review'])->name('write_review');

Route::post('/insert_review',[ProjectController::class,'insert_review'])->name('insert_review');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/all',[UserController::class,'index'])->name('alluser');
Route::get('/user/create',[UserController::class,'create'])->name('create');
Route::get('/user/edit/{id}',[UserController::class, 'edit'])->name('edit');
Route::post('/user/update/{id}',[UserController::class, 'update'])->name('update');
Route::get('/user/create',[UserController::class,'create'])->name('create');
Route::post('/user/store',[UserController::class,'store'])->name('store');
Route::get('/user/destroy/{id}',[UserController::class,'destroy'])->name('destroy');
Route::post('/user/do-destroy/{id}',[UserController::class,'doDestroy'])->name('doDestroy');



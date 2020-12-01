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

Auth::routes();

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');

Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy')->where('id', '[0-9]+');
Route::match(['get', 'post'], '/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update')->where('id', '[0-9]+');
Route::match(['get', 'post'],'/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');

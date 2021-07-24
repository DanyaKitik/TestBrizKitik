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


Route::get('/', \App\Http\Controllers\CRUDController::class)
->name('show');

Route::get('/create', \App\Http\Controllers\CRUDController::class . '@form')
    ->name('create');

Route::post('/create', \App\Http\Controllers\CRUDController::class . '@create');

Route::get('/update/{id?}', \App\Http\Controllers\CRUDController::class . '@find')
    ->name('update');

Route::post('/update/{id?}', \App\Http\Controllers\CRUDController::class . '@update');

Route::get('/delete/{id?}', \App\Http\Controllers\CRUDController::class . '@delete')
    ->name('delete');


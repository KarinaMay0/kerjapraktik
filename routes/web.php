<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('/item', \App\Http\Controllers\ItemController::class);
Route::resource('/bobots', \App\Http\Controllers\BobotController::class);
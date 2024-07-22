<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/item', \App\Http\Controllers\ItemController::class);
Route::resource('/bobots', \App\Http\Controllers\BobotController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Common page for all users
// Route::get('/bobots', function () {
//     return view('bobots.index');
// })->middleware('auth');

// Route::get('/', function () {
//     return '';
// })->middleware('role:engineer');

// Route::get('/engineer koordinator/', function () {
//     return '';
// })->middleware('role:engineer koordinator');
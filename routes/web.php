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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// bejelentkezéssel elérhető oldal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// jelszó emlékeztető
Route::post('password.email', [App\Http\Controllers\AccountsController::class, 'validatePasswordRequest']);
Route::post('password.reset', [App\Http\Controllers\AccountsController::class, 'resetPassword']);
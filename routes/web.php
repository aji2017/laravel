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
    return view('dashboard.home');
})->name('home');

Route::get('/baru', function () {
    return view('dashboard.baru');
})->name('baru');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/reset', function () {
    return view('auth.reset');
})->name('reset');

Route::get('/resetpass', function () {
    return view('auth.resetpass');
})->name('resetpass');

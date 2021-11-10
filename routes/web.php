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
    return view('home');
});

Route::get('auth/login', function () {
    return view('auth/login');
});

Route::get('auth/register', function () {
    return view('auth/register');
});

Route::get('auth/forgot-password', function () {
    return view('auth/forgot-password');
});
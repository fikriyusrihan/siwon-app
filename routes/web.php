<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
// Homepage
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);

// Auth (Login)
Route::get('/auth/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'authenticate']);

// Auth (logout)
Route::post('/logout', [LoginController::class, 'logout']);

// Auth (Register)
Route::get('/auth/register', [RegisterController::class, 'index']);
Route::post('/auth/register', [RegisterController::class, 'store']);

// Auth (Forgot Password)
Route::get('/auth/forgot-password', function () {
    return view('auth/forgot-password');
});

// Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'admin']);

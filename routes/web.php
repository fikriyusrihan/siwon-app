<?php

use App\Http\Controllers\AdminFoodRecipeController;
use App\Http\Controllers\AdminMealPlanController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuggestionController;
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

// Programs
Route::get('/programs', [ProgramsController::class, 'index']);
Route::get('/programs/categories/{category}', [ProgramsController::class, 'category']);

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
    return view('auth/forgot-password', [
        'active' => '',
    ]);
});

// Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'admin']);

// Saran Page
Route::resource('dashboard/suggestions', SuggestionController::class)->middleware('auth', 'admin');

// Resep Makanan Page
Route::resource('dashboard/foodrecipe', AdminFoodRecipeController::class)->middleware('auth', 'admin');

// Meal Plan Page
Route::resource('dashboard/mealplan', AdminMealPlanController::class)->middleware('admin', 'auth');

// Program Page
Route::resource('dashboard/program', AdminProgramController::class)->middleware('admin', 'auth');

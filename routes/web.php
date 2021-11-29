<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\AdminWorkoutController;
use App\Http\Controllers\AdminMealPlanController;
use App\Http\Controllers\AdminFoodRecipeController;

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
Route::get('/programs/{program}', [ProgramsController::class, 'show']);

// Workout
Route::get('/workout', [WorkoutController::class, 'index']);
Route::get('/workout/categories/{category}', [WorkoutController::class, 'category']);
Route::get('/workout/{workout}', [WorkoutController::class, 'show']);


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

// Workout Page
Route::resource('dashboard/workouts', AdminWorkoutController::class)->middleware('admin', 'auth');


// Articles
Route::get('article/perkenalan', function () {
    return view('article/perkenalan', [
        'active' => '',
    ]);
});

Route::get('article/select-program', function () {
    return view('article/select-programs', [
        'active' => '',
    ]);
});

Route::get('article/select-workout', function () {
    return view('article/select-workout', [
        'active' => '',
    ]);
});

Route::get('article/food-recipes', function () {
    return view('article/food-recipes', [
        'active' => '',
    ]);
});

Route::get('article/meal-plan', function () {
    return view('article/meal-plan', [
        'active' => '',
    ]);
});

Route::get('article/suggestion', function () {
    return view('article/suggestion', [
        'active' => '',
    ]);
});

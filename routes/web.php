<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Laravel Authentication Routes
Auth::routes();

// Home route after login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Employee Authentication Routes
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup'); // Show signup form
Route::post('/signup', [AuthController::class, 'signup']); // Handle signup
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Show login form
Route::post('/login', [AuthController::class, 'login']); // Handle login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Handle logout

// Dashboard Route (requires logged-in user)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

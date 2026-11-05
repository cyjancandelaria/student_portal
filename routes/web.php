<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Login
Route::get('/', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

// Signup
Route::get('/signup', [UserController::class, 'showSignup'])->name('signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup.submit');

// Dashboard pages
Route::get('/homepage', [UserController::class, 'homepage'])->name('homepage');
Route::get('/chat', [UserController::class, 'chat'])->name('chat');
Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');
Route::get('/online-classes', [UserController::class, 'onlineClasses'])->name('online.classes');

// Logout
Route::get('/logout', [UserController::class, 'logoutPage'])->name('logout');
Route::post('/logout', [UserController::class, 'logout'])->name('logout.submit');
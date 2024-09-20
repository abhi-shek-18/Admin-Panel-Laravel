<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::any('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard',[UserController::class,'dashboard']);
Route::get('users',[UserController::class,'users']);
Route::get('charts',[UserController::class,'charts']);
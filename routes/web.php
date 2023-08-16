<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
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

Route::get('/', [HomeController:: class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('sign-up.form');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up.submit');

Route::get('/google-auth', [AuthController::class, 'redirectToGoogleAuth']);
Route::get('/oauth_callback_Google', [AuthController::class, 'handleGoogleCallback']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\QnAController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test-post-id-17', [QnAController::class, 'showPost']);

Route::get('/post', function () {
    return view('post');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('log-in.form');
Route::post('/login', [AuthController::class, 'login'])->name('log-in.submit');
Route::get('/login/success', function () {
    return view('login_success');
});

Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('sign-up.form');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up.submit');
Route::get('/signup/success', function () {
    return view('signup_success');
});

Route::get('/google-auth', [AuthController::class, 'redirectToGoogleAuth']);
Route::get('/oauth_callback_Google', [AuthController::class, 'handleGoogleCallback']);

Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
Route::get('/users/profile', [UserController::class, 'showProfile'])->name('users.profile');

Route::get('/leaderboard', [LeaderboardController::class, 'index']);

Route::get('/q&a', [QnAController::class, 'index']);
Route::get('/q&a/open-questions', [QnAController::class, 'openQuestions'])->name('qna.open-question');

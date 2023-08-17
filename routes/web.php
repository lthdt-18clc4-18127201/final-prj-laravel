<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
Route::get('/users/index', [UserController::class, 'getUsers'])->name('users.index');

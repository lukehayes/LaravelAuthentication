<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/
Route::get(
    '/',
    [PageController::class, 'index'])
    ->name('home');

Route::get(
    '/login',
    [PageController::class, 'login'])
    ->name('login');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
*/
Route::post(
    '/authenticate',
    [LoginController::class, 'authenticate'])
    ->name('authenticate');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
|
*/

Route::get(
    '/dashboard',
    [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

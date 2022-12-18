<?php

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

Route::get('/', function () {
    return view('login');
});

Route::post('register',[AccountControllers::class, 'register'])->name('register');
Route::post('register_action',[AccountControllers::class, 'register_action'])->name('register.action');

Route::post('login',[AccountControllers::class, 'login'])->name('login');
Route::post('login_action',[AccountControllers::class, 'login_action'])->name('login.action');
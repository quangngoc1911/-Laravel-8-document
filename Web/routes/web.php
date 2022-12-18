<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccountControllers;

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
    return view('welcome',['title' => 'welcom']);
})->name('welcom');

Route::get('register', function () {
    return view('\Auth\Register',['title' => 'Register']);
})->name('register');

Route::post('register',[AccountControllers::class, 'register_action'])->name('register.action');

Route::get('login',[AccountControllers::class, 'login'])->name('login');
Route::post('login',[AccountControllers::class, 'login_action'])->name('login.action');

Route::get('logout', [AccountControllers::class, 'logout'])->name('logout');
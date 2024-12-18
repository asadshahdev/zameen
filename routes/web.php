<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});

Route::view('/register','register')->name('register');
Route::view('/login','login')->name('login');
Route::post('/register',[RegisterController::class,'register'])->name('registersave');
Route::post('/login',[LoginController::class,'login'])->name('loginmatch');
route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard');


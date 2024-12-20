<?php

use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\LogoutController;
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
route::get('/usercheckpost',[loginController::class,'usercheckpost'])->name('usercheckpost')
->middleware(["auth","role"]);
Route::get('/dashboard',[DealerController::class,'dealerdashboard'])->name('dashboard');
Route::get('/clientdashboard',[ClientController::class,'clientdashboard'])->name('clientdashboard'); 
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');







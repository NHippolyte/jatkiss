<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view("auth.register");
});

Route::get('/login', [\App\Http\Controllers\AuthLoginController::class,'login' ])->name('auth.login');
Route::post('/login', [\App\Http\Controllers\AuthLoginController::class,'login']);
Route::get('/register', [\App\Http\Controllers\AuthRegisterController::class,'register' ])->name('auth.register');
Route::post('/register', [\App\Http\Controllers\AuthRegisterController::class,'register' ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/infoStudio', [App\Http\Controllers\InfoStudioController::class, 'index'])->name('infoStudio');

Auth::routes();
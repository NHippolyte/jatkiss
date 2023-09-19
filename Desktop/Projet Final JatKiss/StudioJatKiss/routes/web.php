<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ResaController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;


Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/register', [UserController::class,'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class,'register'])->name('register');

Route::post('/logout', [LogoutController::class,'destroy'])->name('logout');

Route::resource('/reservations', ReservationController::class);

Route::resource('/users', UserController::class);

Route::get('/confirmation', [ConfirmationController::class, 'showConfirmation'])->name('confirmation');
Route::get('/notFound', [ConfirmationController::class, 'showNotFound'])->name('notFound');

Auth::routes();

Route::get('/index', [HomeController::class, 'showIndex'])->name('index');
Route::get('/profile', [HomeController::class, 'showProfile'])->name('showProfile');

Route::get('/', function(){
    return view('index');
});

Route::get('/seance-enregistrement', [SeanceController::class, 'enregistrement'])->name('seance.enregistrement');
Route::get('/seance-photographie', [SeanceController::class, 'photographie'])->name('seance.photographie');



/* Route::get('/index/{offset?}', [ResaController::class, 'tableIndex'])->where('offset', '[0-9]+');
 */

/* Route::get('/getReservations', [ResaController::class, 'getReservations'])->name('getResa');
Route::get('/getViewResa', [viewResaController::class, 'getViewResa'])->name('getViewResa');
Route::delete('/reservation/{resa_id}', [viewResaController::class, 'destroy'])->name('reservation.destroy');
Route::get('/reservation/{resa_id}/edit', [viewResaController::class, 'edit'])->name('edit');
Route::put('/reservation/{resa_id}', [viewResaController::class, 'update'])->name('reservation.update'); */


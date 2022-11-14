<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ReservasController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [PaginaController::class, 'index'])->name('index');

Route::get('/carta', [PaginaController::class, 'Carta'])->name('carta');

Route::get('/galeria', [PaginaController::class, 'Galeria'])->name('galeria');

Route::get('/contacto', [PaginaController::class, 'Contacto'])->name('cobtacto');

Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas');

Route::post('/reservas', [ReservasController::class, 'store'])->name('store.reserva');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

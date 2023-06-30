<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-tournament', [\App\Http\Controllers\TournamentController::class, 'create'])->name('create-tournament');
Route::get('/start-tournament', [\App\Http\Controllers\TournamentController::class, 'start'])->name('start-tournament');
Route::get('/tournament-list', [\App\Http\Controllers\TournamentController::class, 'list'])->name('tournament-list');

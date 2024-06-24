<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/make-petition', [PageController::class, 'createPetition'])->name('create-petition');
Route::get('/agenda', [PageController::class, 'agenda'])->name('agenda');
Route::get('/discovery', [PageController::class, 'discovery'])->name('discovery');
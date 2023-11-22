<?php

use App\Http\Controllers\ConsolesController;
use App\Http\Controllers\HandHeldController;
use App\Http\Controllers\HomeController;
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
//Homepage principale
Route::get('/home', [HomeController::class, 'index']);


//Homepage consoles portables
Route::get('/consoles_portables', [HandHeldController::class, 'showHandHeld']);

//Homepage consoles de salon
Route::get('/consoles_salons', [ConsolesController::class, 'showConsoles']);



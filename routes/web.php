<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsolesController;
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

//Homepage consoles
Route::get('/consoles', [ConsolesController::class, 'indexConsoles']);
Route::get('/showconsoles/{id}', [ConsolesController::class, 'show']);

Route::get('/consoles/creer', [ConsolesController::class, 'create']);
Route::post('/consoles/creer', [ConsolesController::class, 'store']);

//A propos
Route::get('/about', [AboutController::class, 'show']);



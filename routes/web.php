<?php

use App\Http\Controllers\alumnosController;
use App\Http\Controllers\alumnosEdit;
use App\Http\Controllers\clasesController;
use App\Http\Controllers\clases_alumnos;
use App\Http\Controllers\homeController;
use App\Http\Controllers\instrumentosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\maestrosController;
use App\Models\instrumentos;
use Illuminate\Contracts\Session\Middleware\AuthenticatesSessions;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'home']);

Route::get('/alumnos', [alumnosController::class,'index']);
Route::get('/alumnos/{id}/editViews.alumnosEdit', [alumnosController::class,'edit']);
Route::get('/alumnos/{id}/alumnosShow', [alumnosController::class,'show']);
Route::put('/alumnos/{id}', [alumnosController::class,'update']);
Route::post('/alumnos', [alumnosController::class, 'store']);
Route::delete('/alumnos{id}', [alumnosController::class, 'destroy']);

Route::get('/clases_alumnos', [clases_alumnos::class,'index']);


Route::get('/maestros', [maestrosController::class,'index']);
Route::get('/maestros/{id}/editViews.maestrosEdit', [maestrosController::class,'edit']);
Route::put('/maestros/{id}', [maestrosController::class,'update']);
Route::post('/maestros', [maestrosController::class,'store']);
Route::delete('/maestros{id}', [maestrosController::class,'destroy']);


Route::get('/clases', [clasesController::class, 'index']);
Route::get('/clases/{id}/editViews.clasesEdit', [clasesController::class,'edit']);
Route::put('/clases/{id}', [clasesController::class,'update']);
Route::post('/clases', [clasesController::class, 'store']);
Route::delete('/clases{id}', [clasesController::class, 'destroy']);


Route::get('/instrumentos', [instrumentosController::class, 'index']);
Route::get('/instrumentos/{id}/editViews.instrumentosEdit', [instrumentosController::class,'edit']);
Route::put('/instrumentos/{id}', [instrumentosController::class,'update']);
Route::post('/instrumentos', [instrumentosController::class, 'store']);
Route::delete('/instrumentos{id}', [instrumentosController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\homeController::class, 'home']);
Route::post('/welcome', [LoginController::class, 'logout']);


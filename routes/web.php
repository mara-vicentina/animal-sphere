<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FluxoCaixaController;

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

Route::get('/', [MainController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/clientes', [ClienteController::class, 'index']);
Route::get('/dashboard/animais', [AnimalController::class, 'index']);
Route::get('/dashboard/fluxo-caixa', [FluxoCaixaController::class, 'index']);

Route::post('/user', [UsuarioController::class, 'create']);

Route::post('/client', [ClienteController::class, 'create']);
Route::put('/client', [ClienteController::class, 'update']);
Route::delete('/client', [ClienteController::class, 'remove']);

Route::post('/animal', [AnimalController::class, 'create']); 
Route::put('/animal', [AnimalController::class, 'update']);
Route::delete('/animal', [AnimalController::class, 'remove']);

Route::post('/cash-flow', [FluxoCaixaController::class, 'create']); 
Route::put('/cash-flow', [FluxoCaixaController::class, 'update']);
Route::delete('/cash-flow', [FluxoCaixaController::class, 'remove']);

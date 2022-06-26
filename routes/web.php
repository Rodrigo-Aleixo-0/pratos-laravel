<?php

use App\Http\Controllers\PratosController;
use App\Http\Controllers\UserController;
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


// Rotas Pratos
Route::get('/', [PratosController::class, 'index'])->name('pratos-index');
Route::get('/pratos', [PratosController::class, 'lista'])->name('pratos-lista');
Route::get('/pratos/detalhes/{id}', [ PratosController::class, 'detalhes']);
Route::get('/pratos/adicionar', [PratosController::class, 'create'])->name('pratos-create');
Route::post('/', [PratosController::class, 'store'])->name('pratos-store');
Route::get('/pratos/editar/{id}', [PratosController::class, 'edit'])->name('pratos-edit');
Route::put('/{id}', [PratosController::class, 'update'])->name('pratos-update');
Route::delete('/{id}', [PratosController::class, 'delete'])->name('pratos-delete');


<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('store',[ServicoController::class,'store']);

Route::post('nome', [ServicoController::class, 'pesquisarPorNome']);

Route::delete('remover/{id}', [ServicoController::class, 'excluir']);

Route::post('descricao', [ServicoController::class, 'pesquisarPorDescricao']);

Route::put('update', [ServicoController::class, 'update']);

Route::get('all', [ServicoController::class, 'retornarTodos']);


Route::post('store',[ClienteController::class,'store']);




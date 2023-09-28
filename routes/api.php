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

//rotas do serviços
Route::post('servico/store',[ServicoController::class,'store']);

Route::post('servico/nome', [ServicoController::class, 'pesquisarPorNome']);

Route::delete('servico/remover/{id}', [ServicoController::class, 'excluir']);

Route::post('servico/descricao', [ServicoController::class, 'pesquisarPorDescricao']);

Route::put('servico/update', [ServicoController::class, 'update']);

Route::get('servico/all', [ServicoController::class, 'retornarTodos']);

//rotas do cliete
Route::post('cliente/store',[ClienteController::class,'store']);

Route::post('cliente/nome', [ClienteController::class, 'pesquisarPorNome']);

Route::post('cliente/cpf', [ClienteController::class, 'pesquisarPorCpf']);

Route::post('cliente/celular', [ClienteController::class, 'pesquisarCelular']);

Route::post('cliente/email', [ClienteController::class, 'pesquisarEmail']);








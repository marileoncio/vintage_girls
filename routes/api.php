<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\AgendaController;
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

Route::delete('servico/excluir/{id}', [ServicoController::class, 'excluir']);

Route::post('servico/descricao', [ServicoController::class, 'pesquisarPorDescricao']);

Route::put('servico/update', [ServicoController::class, 'update']);

Route::get('servico/all', [ServicoController::class, 'retornarTodos']);

Route::post('servico/find/{id}', [ServicoController::class, 'pesquisarPorId']);

Route::get('servico/all',[ServicoController::class,'retornarTodos']);


//rotas do cliente
Route::post('cliente/store',[ClienteController::class,'store']);

Route::post('cliente/nome', [ClienteController::class, 'pesquisarPorNome']);

Route::post('cliente/cpf', [ClienteController::class, 'pesquisarPorCpf']);

Route::post('cliente/celular', [ClienteController::class, 'pesquisarCelular']);

Route::post('cliente/email', [ClienteController::class, 'pesquisarEmail']);

Route::get('cliente/find/{id}',[ClienteController::class,'pesquisarPorId']);

Route::put('cliente/update', [ClienteController::class, 'update']);

Route::get('cliente/all',[ClienteController::class,'retornarTodos']);

Route::delete('cliente/excluir/{id}',[ClienteController::class,'excluir']);

Route::put('cliente/senha',[ClienteController::class,'recuperarSenha']);


//rotas do profissional
Route::post('profissional/store',[ProfissionalController::class,'store']);

Route::post('profissional/nome',[ProfissionalController::class,'pesquisarPorNome']);

Route::post('profissional/cpf',[ProfissionalController::class,'pesquisarCpf']);

Route::post('profissional/celular',[ProfissionalController::class,'pesquisarCelular']);

Route::post('profissional/email',[ProfissionalController::class,'pesquisarEmail']);

Route::get('profissional/all',[ProfissionalController::class,'retornarTodos']);

Route::get('profissional/find/{id}',[ProfissionalController::class,'pesquisarPorId']);

Route::put('profissional/update', [ProfissionalController::class, 'update']);

Route::delete('profissional/excluir/{id}', [ProfissionalController::class, 'excluir']);

Route::put('profissional/senha',[ProfissionaisController::class,'recuperarSenha']);


//rota agenda
Route::post('agenda/store',[AgendaController::class,'store']);

Route::get('agenda/find/{id}',[AgendaController::class,'pesquisarPorId']);

Route::delete('agenda/excluir/{id}',[AgendaController::class,'excluir']);

Route::get('agenda/all',[AgendaController::class,'retornarTodos']);









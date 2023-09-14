<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoFormRequest;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function store(ServicoFormRequest $request){
        $servicos = Servicos::create([
           'nome'=> $request->nome,
           'descricao'=> $request->descricao,
           'duracao'=> $request->duracao,
           'preco'=> $request->preco,
        ]);
           return response()->json([
               "success" => true,
               "message" =>"Servico Cadrastado com sucesso",
               "data" => $servicos
   
           ],200);
       }
       public function pesquisarPorNome($nome){
        $servicos = Servicos::find($nome);
        if($servicos == null){
           return response()->json([
            'status'=> false,
            'message'=> "Usuário não encontrado"
           ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $servicos
        ]);
    }

    public function pesquisarPorDescricao($descricao){
        $servicos = Servicos::find($descricao);
        if($servicos == null){
           return response()->json([
            'status'=> false,
            'message'=> "Usuário não encontrado"
           ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $servicos
        ]);
    }

}


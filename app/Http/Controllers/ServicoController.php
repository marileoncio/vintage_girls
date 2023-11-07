<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoFormRequest;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function store(ServicoFormRequest $request)
    {
        $servicos = Servicos::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'duracao' => $request->duracao,
            'preco' => $request->preco,
        ]);
        return response()->json([
            "success" => true,
            "message" => "Servico Cadrastado com sucesso",
            "data" => $servicos

        ], 200);
    }
    public function pesquisarPorNome(Request $request)
    {
        $servicos = Servicos::where('nome', 'like', '%' . $request->nome . '%')->get();
        if (count($servicos) > 0) {
            return response()->json([
                'status' => true,
                'data' => $servicos
            ]);
        }
    }

    public function excluir($id)
    {
        $servicos = Servicos::find($id);

        if (!isset($servicos)) {
            return response()->json([
                'status' => false,
                'message' => "Serviço não encontrado"
            ]);
        }

        $servicos->delete();
        return response()->json([
            'status' => true,
            'message' => "Serviço excluído com sucesso"
        ]);
    }

    public function pesquisarPorDescricao(Request $request)
    {
        $servicos = Servicos::where('descricao', 'like', '%' . $request->descricao . '%')->get();
        if (count($servicos) > 0) {
            return response()->json([
                'status' => true,
                'data' => $servicos
            ]);
        }
    }

    public function update(Request $request)
    {
        $servicos = Servicos::find($request->id);

        if (!isset($servicos)) {
            return response()->json([
                'status' => false,
                'message' => 'Serviço não atualizado'
            ]);
        }
        
        if (isset($request->nome)) {
            $servicos->nome = $request->nome;
        }
        if (isset($request->descricao)) {
            $servicos->descricao = $request->descricao;
        }
        if (isset($request->duracao)) {
            $servicos->duracao = $request->duracao;
        }
        if (isset($request->preco)) {
            $servicos->preco = $request->preco;
        }

        $servicos->update();

        return response()->json([
            'status' => true,
            'message' => 'Serviço atualizado.'
        ]);
    }

    public function retornarTodos(){
        $servicos = Servicos::all();
        return response()->json([
            'status'=> true,
            'data'=> $servicos
        ]);
    }

    public function pesquisarPorId($id){
        $servico = Servicos::find($id);
        if($servico == null){
           return response()->json([
            'status'=> false,
            'message'=> "Serviço não encontrado"
           ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $servico
        ]);
}
}



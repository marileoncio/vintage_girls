<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function store(ClienteFormRequest $request){
        $clientes = Cliente::create([
           'nome'=> $request->nome,
           'celular'=> $request->celular,
           'email'=> $request->email,
           'cpf'=> $request->cpf,
           'dataNascimento'=> $request->dataNascimento,
           'cidade'=> $request->cidade,
           'estado'=> $request->estado,
           'pais'=> $request->pais,
           'rua'=> $request->rua,
           'numero'=> $request->numero,
           'bairro'=> $request->bairro,
           'cep'=> $request->cep,
           'complemento'=> $request->complemento,
           'senha'=> Hash::make($request->senha)
        ]);
           return response()->json([
               "success" => true,
               "message" =>"Cliente Cadrastado com sucesso",
               "data" => $clientes
   
           ],200);
       }
       public function pesquisarPorNome(Request $request)
    {
        $clientes = Cliente::where('nome', 'like', '%' . $request->nome . '%')->get();
        if (count($clientes) > 0) {
            return response()->json([
                'status' => true,
                'data' => $clientes
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => "Nenhum cliente encontrado"
            ]);
        }
    }

    public function pesquisarPorCpf(Request $request)
    {
        $clientes = Cliente::where('cpf', 'like', '%' . $request->cpf . '%')->get();
        if (count($clientes) > 0) {
            return response()->json([
                'status' => true,
                'data' => $clientes
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => "CPF não encontrado"
            ]);
        }
    }
    public function pesquisarCelular(Request $request)
           {
               $clientes = Cliente::where('celular', 'like', '%' . $request->celular . '%')->get();
               if (count($clientes) > 0) {
                   return response()->json([
                       'status' => true,
                       'data' => $clientes
                   ]);
               }
               else{
                   return response()->json([
                       'status' => false,
                       'message' => "Nenhum celular encontrado"
                   ]);
               }
           }

           public function pesquisarEmail(Request $request)
           {
               $clientes = Cliente::where('email', 'like', '%' . $request->email . '%')->get();
               if (count($clientes) > 0) {
                   return response()->json([
                       'status' => true,
                       'data' => $clientes
                   ]);
               }
               else{
                   return response()->json([
                       'status' => false,
                       'message' => "Nenhum e-mail encontrado"
                   ]);
               }
           }

           public function retornarTodos()
    {
        $clientes = Cliente::all();
        return response()->json([
            'status' => true,
            'data' => $clientes
        ]);
    }
        }


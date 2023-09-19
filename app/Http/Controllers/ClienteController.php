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
}

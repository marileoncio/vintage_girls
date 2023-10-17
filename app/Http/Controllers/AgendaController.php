<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaFormRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function store(AgendaFormRequest $request){
        $agenda = Agenda::create([
           'profissional_id'=> $request->cliente_id,
           'cliente_id'=> $request->profissional_id,
           'data_hora'=> $request->data_hora,
           'servico_id'=> $request->servico_id,
           'tipo_pagamento'=> $request->tipo_pagamento,
           'valor'=> $request->Valor
        ]);
           return response()->json([
               "success" => true,
               "message" =>"Agendamento feito com sucesso",
               "data" => $agenda
   
           ],200);
       }
}

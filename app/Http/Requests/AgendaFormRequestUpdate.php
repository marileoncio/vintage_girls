<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AgendaFormRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'profissional_id' => '',
            'clinte_id' => '',
            'servico_id' => '',
            'data_hora' => '',
            'tipo_pagamento' => 'max: 20|min: 3',
            'valor' => ''
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
           'success'=>false,
           'error'=>$validator->errors()
        ]));
      }
      public function messages(){
       return [
        'tipo_pagamento.max'=>'O maximo é 20 caracteres',
        'tipo_pagamento.min'=>'É obrigatorio no minimo 3 caracteres'
       ];
}
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profissional_id' => 'required',
            'clinte_id' => 'required',
            'servico_id' => 'required',
            'data_hora' => 'required',
            'tipo_pagamento' => 'required|max: 20|min: 3',
            'valor' => 'required'
        ];
    }
}

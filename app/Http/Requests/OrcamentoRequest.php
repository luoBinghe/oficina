<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrcamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'vendedor.required'=>'*Campo obrigatório!',
            'vendedor.max'=>'Até 255 caracteres',
            'cliente.required'=>'*Campo obrigatório!',
            'cliente.max'=>'Até 255 caracteres',
            'descricao.required'=>'*Descreva o orçamento',
            'descricao.max'=>'Até 500 caracteres'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'vendedor'=>'required|max:255',
            'cliente'=> 'required|max:255',
            'descricao'=>'required|max:500'
        ];
    }
}

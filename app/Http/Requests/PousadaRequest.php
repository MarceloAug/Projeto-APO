<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PousadaRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:80',
            'endereco' => 'required|max:50',
            'cidade' =>'required|max:50',
            'cep' => 'required|max:12',
            'estado' => 'required|max:50',
            'bairro' => 'required|max:50',
            'observacoes' => 'required|max:255',
            'imagem' => 'required|max:30',
        ];
    }

    public function messages()
    {
        return [
            'required'=>' :attribute é obrigatorio'
        ];
    }
}

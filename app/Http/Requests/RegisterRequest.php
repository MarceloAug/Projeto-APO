<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:15',
            'email' => 'required|max:50',
            'password' =>'required',
            'rpassword' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatorio',
            'email.required' => 'O email é obrigatorio',
            'password.required' => 'A senha é obrigatoria',
            'rpassword.same' => 'As senhas não conferem',
        ];
    }
}

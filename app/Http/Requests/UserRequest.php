<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'photo' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'unique:users', 'confirmed'],
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'usuário',
            'password' =>  'senha'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'unique' => 'O valor informado no campo :attribute já existe.',
            'email' => 'O email informado é inválido.',
            'confirmed' => 'As senhas devem ser iguais.'
        ];
    }
}

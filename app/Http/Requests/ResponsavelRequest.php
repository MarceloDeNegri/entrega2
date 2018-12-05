<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResponsavelRequest extends FormRequest
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
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'  => 'O campo nome é obrigatório!',
            'sobrenome.required'  => 'O campo sobrenome é obrigatório!',
            'email.email'  => 'O campo email é deve conter um email válido!',
            'telefone.required'  => 'O campo telefone é obrigatório!',

        ];
    }
}

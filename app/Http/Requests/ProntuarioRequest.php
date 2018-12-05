<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProntuarioRequest extends FormRequest
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
            'peso' => 'required',
            'altura' => 'required',
            'idade' => 'required',
            'febre' => 'required',
            'atendimento_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'peso.required' => 'O campo peso é obrigatório!',
            'altura.required'  => 'O campo altura é obrigatório!',
            'idade.required'  => 'O campo idade é obrigatório!',
            'febre.required'  => 'O campo temperatura é obrigatório!',
            'atendimento_id.required'  => 'O campo atendimento é obrigatório!',

        ];
    }
}

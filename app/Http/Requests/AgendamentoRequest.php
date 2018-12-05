<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
            'dtConsulta' => 'required',
            'paciente_id' => 'required',
            'medico_id' => 'required',
            'convenio_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'dtConsulta.required' => 'O campo data da consulta é obrigatório!',
            'paciente_id.required'  => 'O campo paciente é obrigatório!',
            'medico_id.required'  => 'O campo médico é obrigatório!',
            'convenio_id.required'  => 'O campo convenio é obrigatório!',

        ];
    }
}

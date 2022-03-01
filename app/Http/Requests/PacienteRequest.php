<?php

namespace App\Http\Requests;

use App\Rules\CpfValido;
use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'name' => ['required', new FullName],
            'cpf' => ['required', new CpfValido],
            'cns' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'nome_da_mae' => ['required', new FullName],
            'grupo_prioritário' => 'required',
            'categoria_grupo_prioritario' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatótio.'
        ];
    }
}

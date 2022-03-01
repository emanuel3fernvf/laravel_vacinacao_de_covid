<?php

namespace App\Http\Requests;

use App\Rules\ValidaCampoDose;
use Illuminate\Foundation\Http\FormRequest;

class VacinaRequest extends FormRequest
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
            'id_paciente' => 'required',
            'id_lote' => 'required',
            'data_da_vacina' => 'required',
            'dose' => ['required', new ValidaCampoDose($this->id_paciente, $this->dose)],
            'vacinador' => 'required',
            'unidade_de_vacinacao' => 'required',
        ];
    }
}

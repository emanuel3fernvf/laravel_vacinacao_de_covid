<?php

namespace App\Rules;

use App\Models\ModelPaciente;
use Illuminate\Contracts\Validation\Rule;

class ValidaCampoDose implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id_paciente, $thisDose)
    {
        $this->id_paciente = $id_paciente;
        $this->thisDose = $thisDose;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $dosesPaciente = ModelPaciente::find($this->id_paciente)->relVacinas;

        if ($this->thisDose === $value) {
            return true;
        }

        foreach ($dosesPaciente as $vacina) {
            if ($vacina->dose === $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Dose já existe.';
    }
}

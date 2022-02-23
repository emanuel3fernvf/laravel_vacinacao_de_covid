<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPaciente extends Model
{
    protected $table='paciente';
    protected $fillable=['name', 'cpf', 'cns', 'data_nascimento', 'sexo', 'nome_da_mae','grupo_prioritário','categoria_grupo_prioritario'];

    public function relVacinas()
    {
        return $this->hasMany('App\Models\ModelVacina','id_paciente');
    }
}

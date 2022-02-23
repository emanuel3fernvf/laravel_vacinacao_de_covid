<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVacina extends Model
{
    protected $table='vacina';
    protected $fillable=['id_paciente', 'id_lote', 'data_da_vacina', 'dose', 'vacinador', 'unidade_de_vacinacao'];

    public function relPacientes()
    {
        return $this->hasOne('App\Models\ModelPaciente','id','id_paciente');
    }
    public function relLotes()
    {
        return $this->hasOne('App\Models\ModelLote','id','id_lote');
    }
}

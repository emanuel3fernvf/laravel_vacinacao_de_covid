<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelLote extends Model
{
    protected $table='lote';
    protected $fillable=['lote', 'fabricante', 'validade', 'nfe', 'data_recebimento'];

    public function relVacinas()
    {
        return $this->hasMany('App\Models\ModelVacina','id_lote');
    }
}

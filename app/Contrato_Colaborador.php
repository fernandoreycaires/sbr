<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_Colaborador extends Model
{
    protected $table = 'contratos_colaboradores';

    public function contrato()
    {
        return $this->belongsTo(Colaborador::class,'colaborador','id');
    }
}

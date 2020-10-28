<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class,'colaborador','id');
    }
}

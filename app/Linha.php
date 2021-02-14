<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linha extends Model
{
    protected $table = 'produto_linhas';

    public function sabor()
    {
        return $this->hasOne(Sabor::class, 'linha', 'id') ;
    }
}

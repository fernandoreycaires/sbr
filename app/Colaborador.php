<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaboradores';

    public function endereco()
    {
    //                       tabela            foreignKey     Chave da tabela estrangeira
        return $this->hasOne(Endereco::class, 'colaborador', 'id') ;
    }

    public function contrato()
    {
        return $this->hasone(Contrato_Colaborador::class, 'colaborador', 'id');
    }
}

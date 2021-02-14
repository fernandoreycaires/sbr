<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    protected $table = 'produto_sabores';

    public function sabor()
    {
        return $this->belongsTo(Linha::class,'linha','id');
    }
    
}

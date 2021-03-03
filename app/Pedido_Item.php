<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_Item extends Model
{
    protected $table = 'pedido_itens';
    

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'pedido', 'id') ;
    }
}

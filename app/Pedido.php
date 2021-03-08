<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    public function itens()
    {
        return $this->hasOne(Pedido_Item::class, 'pedido', 'id') ;
    }
}

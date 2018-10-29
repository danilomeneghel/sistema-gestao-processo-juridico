<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;

class Processo extends Model
{
    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_edicao';

    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'id_cliente');
    }
    
    public function pedido()
    {
        return $this->belongsToMany(Pedido::class);
    }
}

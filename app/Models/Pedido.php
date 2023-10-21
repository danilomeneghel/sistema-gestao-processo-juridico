<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_edicao';

    public function tipopedido()
    {
        return $this->hasOne(Tipopedido::class, 'id', 'id_tipo_pedido');
    }

    public function processo()
    {
        return $this->belongsToMany(Processo::class);
    }
}

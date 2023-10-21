<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_edicao';

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'id', 'id_cliente');
    }

    public function pedido()
    {
        return $this->belongsToMany(Pedido::class);
    }
}

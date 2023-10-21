<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_edicao';

    protected $fillable = ['nome', 'telefone', 'email', 'genero'];

}

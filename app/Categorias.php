<?php

namespace Rossina;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'nome_categoria',
        'descricao_categoria'
    ];
}

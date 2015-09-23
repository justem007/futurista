<?php

namespace Rossina;

use Illuminate\Database\Eloquent\Model;

class TituloBloco extends Model
{
    protected $fillable = [
        'nome_titulobloco',
        'descricao_titulobloco'
    ];
}

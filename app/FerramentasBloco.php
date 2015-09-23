<?php

namespace Rossina;

use Illuminate\Database\Eloquent\Model;

class FerramentasBloco extends Model
{
    protected $fillable = [
        'nome_ferramenta',
        'descricao_ferramenta'
    ];
}

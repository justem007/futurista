<?php

namespace Rossina;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nome_menu',
        'descricao_menu',
        'link_menu'
    ];
}

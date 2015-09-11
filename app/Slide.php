<?php

namespace Rossina;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'nome_slide',
        'descricao_slide',
        'link_slide'
    ];
}

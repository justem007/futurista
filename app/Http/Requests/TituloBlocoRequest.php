<?php

namespace Rossina\Http\Requests;

use Rossina\Http\Requests\Request;

class TituloBlocoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_titulobloco'       => 'required|max:100',
            'descricao_titulobloco'  => 'required|max:500'
        ];
    }
}

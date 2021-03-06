<?php

namespace Rossina\Http\Requests;

use Rossina\Http\Requests\Request;

class FerramentasBlocoRequest extends Request
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
            'nome_ferramenta'       => 'required|max:100',
            'descricao_ferramenta'  => 'required|max:500'
        ];
    }
}

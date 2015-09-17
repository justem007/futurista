<?php

namespace Rossina\Http\Requests;

use Rossina\Http\Requests\Request;

class SiteBlocoUmRequest extends Request
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
            'nome_blocoum' => 'required|max:255',
            'descricao_blocoum' => 'required|max:2000'
        ];
    }
}

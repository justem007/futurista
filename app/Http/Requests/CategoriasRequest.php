<?php

namespace Rossina\Http\Requests;

class CategoriasRequest extends Request
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
            'nome_categoria' => 'required|max:100',
            'descricao_categoria' => 'required|max:200'
        ];
    }
}

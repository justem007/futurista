<?php

namespace Rossina\Http\Requests;

class SlideRequest extends Request
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
            'nome_slide'       => 'required|max:50',
            'descricao_slide'  => 'required|max:50',
            'link_slide'       => 'required|max:50'
        ];
    }
}

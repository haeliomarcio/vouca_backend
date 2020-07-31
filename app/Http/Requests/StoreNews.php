<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNews extends FormRequest
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
            'title' => 'required|min:3',
            'image' => 'required',
            'introduction' => 'required|min:6',
            'description' => 'required|min:6'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Título',
            'image' => 'Imagem',
            'introduction' => 'Introdução',
            'description' => 'Descrição',
        ];
    }
}

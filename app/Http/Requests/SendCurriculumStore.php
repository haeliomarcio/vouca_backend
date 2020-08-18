<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendCurriculumStore extends FormRequest
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
            'name' => 'required|min:3',
            'description' => 'required|min:6',
            'status' => 'required',
            'begin' => 'required',
            'end' => 'required',
            'city_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Título',
            'description' => 'Descrição',
            'status' => 'Status',
            'begin' => 'Iníco',
            'end' => 'Fim',
            'state_id' => 'Estado',
            'city_id' => 'Cidade',
        ];
    }
}

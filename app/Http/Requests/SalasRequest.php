<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalasRequest extends FormRequest
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
            'nombre_sala'       =>  'unique:salas|min:4|max:50|required',
            'capacidad_sala'    =>  'min:1|max:10|required',
            'mts2_sala'         =>  'min:1|max:11|required'

        ];
    }
}

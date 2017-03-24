<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'razon_cliente'         => 'min:4|max:120|required',
            'nit_cliente'           => 'min:14|max:14|required',
            'giro_cliente'          => 'min:10|max:120|required',
            'riva_cliente'          => 'min:7|max:7|required',
            'nombre_cliente'        => 'min:4|max:120|required',
            'dui_cliente'           => 'min:9|max:9|required',
            'direccion'             => 'max:150',
            'teldirecto_cliente'    => 'min:8|max:8|required',
            'celular_cliente'       => 'min:8|max:8|required',            
            'correo_cliente'        => 'min:10|unique:clientes',
            'oencargado_cliente'    => 'min:15|max:150|required',
             
            

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proveedores extends FormRequest
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
            'pnom_proveedor'        =>  'required',
            'snom_proveedor'        =>  'required',
            'papel_proveedor'       =>  'required',
            'sapel_proveedor'       =>  'required',
            'regfiscal_proveedor'   =>  'required|unique:proveedores',
            'nit_proveedor'         =>  'required|unique:proveedores|min:17|max:17',
            'tel_proveedor'         =>  'required|unique:proveedores|min:8|max:8',
            'correo_proveedor'      =>  'required|unique:proveedores',
            'servicio_id'           =>  'required|unique:proveedores'
        ];
    }
}

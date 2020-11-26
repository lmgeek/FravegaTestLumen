<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return true;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'code' => 'required|integer',
            'direction' => 'required',
            'coordenades' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'price.required' => 'Añade un :attribute al producto',
            'price.min' => 'El :attribute debe ser mínimo 0'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del producto',
            'code' => 'codigo de sucursal',
            'coordenades' => 'coordenadas de la ubicacion en el mapa sucursal, longitud y latitud',
        ];
    }
}

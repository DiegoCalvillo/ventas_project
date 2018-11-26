<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRegistroRequest extends FormRequest
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
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'RFC' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre_cliente.required' => 'El campo Nombre es requerido',
            'apellido_cliente.required' => 'El campo Apellido es requerido',
            'direccion.required' => 'El campo Direccion es requerido',
            'email.required' => 'El campo Email es requerido',
            'telefono.required' => 'El campo Telefono es requerido',
            'RFC.required' => 'El campo RFC es requerido'
        ];
    }
}

<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentasRegistroRequest extends FormRequest
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
            'cliente_id' => 'required',
            'articulo_id' => 'required',
            'total_venta' => 'required',
            'cantidad_especificada' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => 'No se ha especificado cliente',
            'articulo_id.required' => ' No se ha especificado articulo',
            'total_venta.required' => 'No hay un total de venta',
            'cantidad_especificada.required' => 'No hay cantidad'
        ];
    }
}

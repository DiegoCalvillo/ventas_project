<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticulosRegistroRequest extends FormRequest
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
            'descripcion' => 'required',
            'nombre_articulo' => 'required',
            'categoria_id' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'imagen'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'El campo Descripción es obligatorio',
            'nombre_articulo.required' => 'El campo Nombre de articulo es obligatorio',
            'categoria_id.required' => 'El campo Categoria es obligatorio',
            'cantidad.required' => 'El campo Cantidad es obligatorio',
            'precio.required' => 'El campo Precio es obligatorio',
            'imagen.required' => 'Debe agregar una imagen'
        ];
    }
}

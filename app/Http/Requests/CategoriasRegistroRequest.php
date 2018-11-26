<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRegistroRequest extends FormRequest
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
            'nombre_categoria' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nombre_categoria.required' => 'El campo Categoria es obligatorio'
        ];
    }
}

<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticulosCantidadesRequest extends FormRequest
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
            'cantidad' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cantidad.required' => 'No ha agregado ninguna cantidad a agregar'
        ];
    }
}

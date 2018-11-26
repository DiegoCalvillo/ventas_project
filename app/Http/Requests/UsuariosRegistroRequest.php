<?php

namespace ventas_project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRegistroRequest extends FormRequest
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
            'password_confirm' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debe llenar el campo nombre',
            'apellidos.required' => 'Debe llenar el campo apellidos',
            'email.required' => 'Debe llenar el campo email',
            'usuario.required' => 'Debe llenar el campo usuario',
            'password.required' => 'Debe llenar el campo contraseña',
            'password_confirm.required' => 'Debe llenar la confirmacion de la contraseña',
            'password_confirm.same' => 'No coincide con la contraseña'
        ];
    }
}

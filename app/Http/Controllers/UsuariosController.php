<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use ventas_project\Personas as Personas;
use ventas_project\User as User;
use Session;
use ventas_project\Http\Requests\UsuariosRegistroRequest;

class UsuariosController extends Controller
{
    public function create()
    {
    	return view('usuarios.usuarios_registro');
    }

    public function store(UsuariosRegistroRequest $request)
    {
    	$usuario = new User;
    	$usuario->name = $request->usuario;
    	$usuario->password = bcrypt($request->password);
    	$usuario->email = $request->email;
    	$usuario->save();
    	Personas::add_person($usuario->id, $request->nombre, $request->apellidos);
    	Session::flash('message', 'El registro ha sido creado satisfactoriamente');
    	return redirect('/login');
    }
}

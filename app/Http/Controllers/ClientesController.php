<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use ventas_project\Clientes as Clientes;
use Auth;
use Redirect;
use Session;
use ventas_project\Http\Requests\ClientesRegistroRequest;
use ventas_project\Personas as Personas;
use ventas_project\Ventas as Ventas;

class ClientesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$clientes = Clientes::all();
    	return view('clientes.clientes')->with('clientes', $clientes);
    }

    public function create()
    {
    	return view('clientes.clientes_registro');
    }

    public function store(ClientesRegistroRequest $request)
    {
    	$cliente = new Clientes;
    	$cliente->nombre_cliente = $request->nombre_cliente;
    	$cliente->apellido_cliente = $request->apellido_cliente;
    	$cliente->direccion = $request->direccion;
    	$cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
    	$cliente->RFC = $request->RFC;
    	$cliente->usuario_id = Auth::User()->id;
    	$cliente->save();
        Session::flash('message', 'El registro ha sido creado exitosamente');
        return redirect('/clientes/'.$cliente->id);
    }

    public function show($id)
    {
        $cliente = Clientes::find($id);
        $persona = Personas::where('usuario_id', '=', $cliente->usuario_id)->first();
        return view('clientes.clientes_perfil')->with('cliente', $cliente)->with('persona', $persona);
    }

    public function update(ClientesRegistroRequest $request)
    {
        $cliente = Clientes::find($request->id);
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->apellido_cliente = $request->apellido_cliente;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->RFC = $request->RFC;
        $cliente->save();
        Session::flash('message', 'El registro ha sido actualizado exitosamente');
        return redirect('/clientes/'.$cliente->id);
    }

    public function edit($id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.clientes_editar')->with('cliente', $cliente);
    }

    public function destroy($id)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();
        Session::flash('message', 'El registro ha sido eliminado exitosamente');
        return redirect('/clientes');
    }

    public function ventas_hechas($id)
    {
        $ventas = Ventas::where('cliente_id', '=', $id)->get();
        $cliente = Clientes::find($id);
        return view('clientes.clientes_ventas_hechas')->with('ventas', $ventas)->with('cliente', $cliente);
    }
}

<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use ventas_project\Categorias as Categorias;
use ventas_project\Personas as Personas;
use ventas_project\Articulos as Articulos;
use Carbon\Carbon;
use ventas_project\Http\Requests\CategoriasRegistroRequest;

class CategoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$categorias = Categorias::all();
    	return view('categorias.categorias')->with('categorias', $categorias);
    }

    public function create()
    {
    	return view('categorias.categorias_registro');
    }

    public function store(CategoriasRegistroRequest $request)
    {
    	$categoria = new Categorias;
    	$categoria->nombre_categoria = $request->nombre_categoria;
    	$categoria->usuario_id = Auth::User()->id;
    	$categoria->save();
    	Session::flash('message', 'El registro ha sido creado exitosamente');
    	return redirect('/categorias');
    }

    public function show($id)
    {
    	$categoria = Categorias::find($id);
    	$persona = Personas::where('usuario_id', '=', $categoria->usuario_id)->first();
    	$fecha_creacion = Carbon::createFromFormat('Y-m-d H:i:s', $categoria->created_at);
        $articulos = Articulos::where('categoria_id', '=', $categoria->id)->get();
    	return view('categorias.categorias_perfil')->with('categoria', $categoria)->with('persona', $persona)->with('fecha_creacion', $fecha_creacion)->with('articulos', $articulos);
    }

    public function edit($id)
    {
        $categoria = Categorias::find($id);
        return view('categorias.categorias_editar')->with('categoria', $categoria);
    }

    public function update(CategoriasRegistroRequest $request)
    {
        $categoria = Categorias::find($request->id);
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->save();
        Session::flash('message', 'El registro ha sido actualizado exitosamente');
        return redirect('/categorias/'.$categoria->id);
    }

    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        if(Articulos::revisar_categoria($categoria->id)) {
            $categoria->delete();
            Session::flash('message', 'El registro ha sido eliminado exitosamente');
            return redirect('/categorias');
        } else {
            Session::flash('message-error', 'La categoria que desea eliminar tiene articulos asociados, para poder elimnarlos debe desligarlos');
            return redirect('/categorias/'.$categoria->id);
        }
    }
}

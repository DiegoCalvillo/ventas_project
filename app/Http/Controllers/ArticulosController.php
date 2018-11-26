<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Carbon\Carbon;
use ventas_project\Articulos as Articulos;
use ventas_project\Categorias as Categorias;
use ventas_project\Personas as Personas;
use ventas_project\Imagenes as Imagenes;
use ventas_project\Http\Requests\ArticulosRegistroRequest;
use ventas_project\Http\Requests\ArticulosCantidadesRequest;

class ArticulosController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$articulos = Articulos::all();
        $categorias = Categorias::all()->pluck('nombre_categoria', 'id');
    	return view('articulos.articulos')->with('articulos', $articulos)->with('categorias', $categorias);
    }

    public function create()
    {
    	$categorias = Categorias::all()->pluck('nombre_categoria', 'id');
    	return view('articulos.articulos_registro')->with('categorias', $categorias);
    }

    public function store(ArticulosRegistroRequest $request)
    {
    	$articulo = new Articulos;
    	$articulo->descripcion = $request->descripcion;
    	$articulo->nombre_articulo = $request->nombre_articulo;
    	$articulo->categoria_id = $request->categoria_id;
    	$articulo->cantidad = $request->cantidad;
    	$articulo->precio = $request->precio;
    	$articulo->usuario_id = Auth::User()->id;
        $imagen = new Imagenes;
        $file = $request->file('imagen');
        $nombre_imagen = $file->getClientOriginalName();
        \Storage::disk('local')->put($nombre_imagen, \File::get($file));
        $imagen->nombre_imagen = $nombre_imagen;
        $imagen->ruta_imagen = "../img/".$nombre_imagen;
        $imagen->save();
    	$articulo->imagen_id = $imagen->id;
    	$articulo->save();
    	Session::flash('message', 'El registro ha sido creado exitosamente');
    	return redirect('/articulos');
    }

    public function show($id)
    {
        $articulo = Articulos::find($id);
        $persona = Personas::where('usuario_id', '=', $articulo->usuario_id)->first();
        $fecha_creacion = Carbon::createFromFormat('Y-m-d H:i:s', $articulo->created_at);
        return view('articulos.articulos_perfil')->with('articulo', $articulo)->with('persona', $persona)->with('fecha_creacion', $fecha_creacion);
    }

    public function edit($id)
    {
        $articulo = Articulos::find($id);
        $categorias = Categorias::all()->pluck('nombre_categoria', 'id');
        return view('articulos.articulos_editar')->with('articulo', $articulo)->with('categorias', $categorias);
    }

    public function update(Request $request)
    {
        $articulo = Articulos::find($request->id);
        $articulo->descripcion = $request->descripcion;
        $articulo->nombre_articulo = $request->nombre_articulo;
        $articulo->categoria_id = $request->categoria_id;
        $articulo->precio = $request->precio;
        if($request->imagen != "") {
            $imagen = new Imagenes;
            $file = $request->file('imagen');
            $nombre_imagen = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre_imagen, \File::get($file));
            $imagen->nombre_imagen = $nombre_imagen;
            $imagen->ruta_imagen = "../img/".$nombre_imagen;
            $imagen->save();
            $articulo->imagen_id = $imagen->id;   
        }
        $articulo->save();
        Session::flash('message', 'El registro ha sido actualizado satisfactoriamente');
        return redirect('/articulos/'.$articulo->id);
    }

    public function destroy($id)
    {
        $articulo = Articulos::find($id);
        $articulo->delete();
        Session::flash('message', 'El registro ha sido eliminado exitosamente');
        return redirect('/articulos');
    }

    public function entrada_producto($id)
    {
        $articulo = Articulos::find($id);
        $cantidad = $articulo->cantidad;
        return view('articulos.articulos_entrada_producto')->with('cantidad', $cantidad)->with('articulo', $articulo);
    }

    public function registrar_entrada_producto(ArticulosCantidadesRequest $request)
    {
        $articulo = Articulos::find($request->id);
        $articulo->cantidad = $request->cantidad_articulo;
        $articulo->save();
        Session::flash('message', 'El registro ha sido actualizado satisfactoriamente');
        return redirect('/articulos/'.$articulo->id);
    }

    public function getCategorias(Request $request, $id)
    {
        if($request->ajax())
        {
            $articulos = Articulos::where('categoria_id', '=', $id)->get();
            return response()->json($articulos);
        }
    }
}

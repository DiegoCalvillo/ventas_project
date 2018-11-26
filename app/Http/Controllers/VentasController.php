<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use ventas_project\Ventas as Ventas;
use ventas_project\Clientes as Clientes;
use ventas_project\Articulos as Articulos;
use ventas_project\Personas as Personas;
use ventas_project\Http\Requests\VentasRegistroRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Auth;
use Session;

class VentasController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$ventas = Ventas::all();
    	return view('ventas.ventas')->with('ventas', $ventas);
    }

    public function create()
    {
    	$clientes = Clientes::all()->pluck('nombre_cliente', 'id');
    	$articulos = Articulos::all()->pluck('nombre_articulo', 'id');
    	return view('ventas.ventas_registro')->with('clientes', $clientes)->with('articulos', $articulos);
    }

    public function getArticulos(Request $request, $id)
    {
        if($request->ajax())
        {
            $articulos = Articulos::find($id);
            return response()->json($articulos);
        }
    }

    public function store(VentasRegistroRequest $request)
    {
        $venta = new Ventas;
        $venta->cliente_id = $request->cliente_id;
        $venta->articulo_id = $request->articulo_id;
        $venta->cantidad_vendida = $request->cantidad_especificada;
        Articulos::calcular_cantidad($request->articulo_id, $request->cantidad_especificada);
        $venta->precio = $request->total_venta;
        $venta->usuario_id = Auth::User()->id;
        $venta->save();
        Session::flash('message', 'La venta se ha realizado exitosamente');
        return redirect('/ventas');
    }

    public function show($id)
    {
        $venta = Ventas::find($id);
        $persona = Personas::where('usuario_id', '=', $venta->usuario_id)->first();
        return view('ventas.ventas_perfil')->with('venta', $venta)->with('persona', $persona);
    }

    public function pdf($id)
    {
        $venta = Ventas::find($id);
        $pdf = PDF::loadView('pdf.venta');
        return $pdf->download('venta.pdf');
    }
}

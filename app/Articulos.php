<?php

namespace ventas_project;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    public function categoria()
    {
    	return $this->belongsTo(Categorias::class);
    }

    public function imagen()
    {
    	return $this->belongsTo(Imagenes::class);
    }

    public static function revisar_categoria($id_categoria)
    {
    	$articulos = Articulos::where('categoria_id', '=', $id_categoria)->get();
    	if($articulos->count() == 0) {
    		return true;
    	} else {
    		return false;
    	}
    }

    public static function calcular_cantidad($id_artitulo, $cantidad_vendida)
    {
        $articulo = Articulos::find($id_artitulo);
        $canitdad_actual = $articulo->cantidad;
        $canitdad_actual = $canitdad_actual - $cantidad_vendida;
        $articulo->cantidad = $canitdad_actual;
        $articulo->save();
    }
}

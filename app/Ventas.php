<?php

namespace ventas_project;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    public function cliente()
    {
    	return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function articulo()
    {
    	return $this->belongsTo(Articulos::class, 'articulo_id');
    }
}

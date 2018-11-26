<?php

namespace ventas_project;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function ventas()
    {
    	return $this->hasMany(Ventas::class, 'cliente_id');
    }
}

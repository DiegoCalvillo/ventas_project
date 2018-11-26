<?php

namespace ventas_project;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function usuario()
    {
    	return $this->belongsTo(User::class, 'usuario_id');
    }

    public function articulos()
    {
    	return $this->hasMany(Articulos::class);
    }
}

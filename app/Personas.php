<?php

namespace ventas_project;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    public static function add_person($id, $nombre, $apellidos)
    {
    	$person = new Personas;
    	$person->usuario_id = $id;
    	$person->nombre = $nombre;
    	$person->apellidos = $apellidos;
    	$person->save();
    }
}

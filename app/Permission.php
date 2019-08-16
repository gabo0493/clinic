<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'name','slug','description'
    ];

 //RELACIONES
    public function role()
    {
    	return $this->belongsTo('App\Role'); //un permiso pertenece a un rol por eso la clase se escribe en singular
    }

    public function users()
    {
    	return $this->belongsToMany('App\User')->withTimestamps(); // muchos usuarios puedenen tener un permiso, por eso el nombre de la clase se escribe el plural, el metodo que se ocupa es para que laravel de forma automatica asigne fecha de creacion y actualizacion
    }
 //ALMACENAMIENTO

 //VALIDACION

 //RECUPERACION DE INFORMACION

 //OTRAS OPERACIONES
}

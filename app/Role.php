<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'name','slug','description'
    ];
 //RELACIONES
 	public funtion permissions()
 	{
 		return $this->hasMany('App\Permissions'); //aca se relaciona que un rol tiene muchos permisos
 	}

 	public funtion users()
 	{
 		return $this->belongsToMany('App\User')->withTimestamps(); //aca se relaciona que muchos roles tienen muchos usuarios
 	}
 //ALMACENAMIENTO

 //VALIDACION

 //RECUPERACION DE INFORMACION

 //OTRAS OPERACIONES
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'name', 'slug','description'
    ];
 //RELACIONES
 	public function permissions()
 	{
 		return $this->hasMany('App\Permissions'); //aca se relaciona que un rol tiene muchos permisos
 	}

 	public function users()
 	{
 		return $this->belongsToMany('App\User')->withTimestamps(); //aca se relaciona que muchos roles tienen muchos usuarios
 	}
 //ALMACENAMIENTO
 public function store($request)
 {
   $slug = str_slug($request -> name, '-');
   return self::create($request -> all() + ['slug' => $slug,]);
 }
 //VALIDACION

 //RECUPERACION DE INFORMACION

 //OTRAS OPERACIONES
}

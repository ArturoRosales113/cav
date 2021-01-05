<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
  protected $connection = 'mysql';
  protected $table = 'mensajes';
  protected $fillable = [
   'nombre','correo','mensaje','interes', 'telefono','family', 'is_new','direccion_fiscal'
  ];

  public function articles()
  {
    return $this->belongsToMany('App\Article');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  protected $table = 'stores';
  protected $fillable = [
      'display_name',
      'name',
      'calle',
      'colonia',
      'estado',
      'codigo_postal',
      'telefono',
      'lat',
      'lng',
  ];

  public function stocks()
  {
    return $this->hasMany('App\Stock');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
     'name',
     'display_name',
     'description',
     'img_path',
     'icon_path'
    ];

    public function articles()
    {
       return $this->hasMany('App\Article');
    }
}

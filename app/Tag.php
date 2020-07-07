<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'display_name',
        'description',
        'img_path'

    ];

    //Concepto del producto
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}

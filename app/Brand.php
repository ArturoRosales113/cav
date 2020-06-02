<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $fillable = [
        'name',
        'display_name',
        'description',
        'img_path',
        'icon_path',
       ];
       public function articles()
       {
        return $this->hasMany('App\Article');
       }
}

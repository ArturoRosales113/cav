<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public $fillable = [
        'name',
        'display_name',
        'description',
        'img_path',
        'icon_path'
       ];
       public function articles()
       {
        return $this->hasManyThrough('App\Article', 'App\Category');
       }

       public function categories()
       {
        return $this->hasMany('App\Category');
       }

       public function posts()
       {
           return $this->hasMany('App\Post');
       }
}

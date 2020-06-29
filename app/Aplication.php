<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplication extends Model
{
      public $fillable = [
        'name',
        'display_name',
        'description',
        'img_path',
        'pdf_path',
        'family_id',
        'svg_path'
       ];

       public function articles()
       {
        return $this->hasMany('App\Article');
       }

}

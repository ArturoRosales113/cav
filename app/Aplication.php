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
        return $this->belongsToMany('App\Article')
                    ->withPivot('description', 'img_path')
                    ->withTimestamps();
       }

       public function family()
       {
         return $this->belongsTo('App\Family');
       }

}

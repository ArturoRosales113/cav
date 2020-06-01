<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
   public $fillable = [
    'name',
    'display_name',
    'description',
    'img_path',
    'icon_path',
    'concept_id'
   ];
   public function articles()
   {
    return $this->hasMany('App\Article');
   }

   public function concept(){
    return $this->belongsTo('App\Concept');
   }
}

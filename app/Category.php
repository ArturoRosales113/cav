<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'name',
        'display_name',
        'description',
        'img_path',
        'icon_path',
        'family_id'
       ];

       public function articles()
       {
        return $this->hasMany('App\Article');
       }

       public function downloads()
       {
           return $this->hasManyThrough('App\Download', 'App\Article');
       }

       public function family(){
        return $this->belongsTo('App\Family');
       }

       public function scopeName($query, $input)
       {
          return $query->where("name", $input)->first();
       }
}

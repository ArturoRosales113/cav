<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    public $fillable = [
        'name',
        'slug',
        'description',
        'img_path',
        'banner_path',
        'pdf_path',
        'date'
       ];

       public function aplications()
       {
        return $this->belongsToMany('App\Aplication')
                    ->withPivot('description', 'img_path')
                    ->withTimestamps();
       }
}

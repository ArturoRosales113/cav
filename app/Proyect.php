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
        'date',
        'aplication_id'
       ];

       public function aplications()
       {
        return $this->belongsTo('App\Aplication');
       }
}

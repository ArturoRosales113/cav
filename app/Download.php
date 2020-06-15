<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
    'path',
    'is_video',
    'article_id',
    ];

    public function article()
    {
     return $this->belongsTo('App\Article');
    }
}

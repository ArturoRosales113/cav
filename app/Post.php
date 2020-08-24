<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'family_id',
        'is_draft',
        'img_path',
        'created_at',
        'updated_at'
    ];

    //Concepto del producto
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function scopeNotDraft($query)
    {
        return $query->where('is_draft', false);
    }

    public function scopeSlug($query, $input)
    {
       return $query->where("slug", $input);
    }

    public function scopeSearch($query, $input)
    {
        return $query->where("slug","like","%$input%");
    }


}

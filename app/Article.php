<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'code',
        'is_trend',
        'description',
        'specs',
        'category_id',
        'family_id'
    ];

    //Concepto del producto
    public function family()
    {
        return $this->belongsTo('App\Family');
    }
    // Clasificación de los productos
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Fotos
    public function pics()
    {
        return $this->hasMany('App\Pic');
    }
    public function one_pic()
    {
        return $this->pics()->take(1);
    }

    //Descargas

    public function downloads()
    {
        return $this->hasMany('App\Download');
    }


 //Scopes de búsqueda

    // Buscar Por Concepto
    public function scopeFamily($query, $family_id)
    {
        return $query->where('family_id', $family_id);
    }

    public function scopeCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id);
    }

    public function scopeTendencia($query)
    {
        return $query->where('is_trend',true);
    }

    public function scopeCodigoSearch($query, $input)
    {
       return $query->where("codigo", "like", "%$input%");
    }

    public function scopeSlugSearch($query, $input)
    {
       return $query->where("slug", "like", "%$input%");
    }


}

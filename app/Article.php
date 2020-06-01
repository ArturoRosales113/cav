<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    protected $fillable = [
        'titulo','marca_id','codigo','estilo','acabado_id',
        'suela','linea_id','precio','is_rebaja','is_trend',
        'description','precio_descuento','concept_id','clasification_id','slug'
    ];
    //Concepto del producto
    public function concept()
    {
        return $this->belongsTo('App\Concept');
    }
    // Clasificación de los productos
    public function clasification() 
    {
        return $this->belongsTo('App\Clasification');
    }
    
    // public function marca()
    // {
    //     return $this->belongsTo('App\Marca');
    // }
    // public function linea()
    // {
    //     return $this->belongsTo('App\Linea');
    // }
    // public function acabado()
    // {
    //     return $this->belongsTo('App\Acabado');
    // }
    // //Inventario
    // public function stock()
    // {
    //     return $this->hasMany('App\Stock');
    // }

    // Fotos
    public function pics()
    {
        return $this->hasMany('App\Pic');
    }
    public function one_pic()
    {
        return $this->pics(1);
    }
   //Scopes de búsqueda



    // Buscar Por Concepto
    public function scopeConcepto($query, $concepto)
    {
        return $query->where('con_id', $concepto);
    }
    // Buscar Por Categoria
    public function scopeClasificacion($query, $clasificacion)
    {
        return $query->where('clas_id', $clasificacion);
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

    
    // // Buscar Por Marca
    // public function scopeMarca($query, $marca)
    // {
    //     return $query->where('marca', $marca);
    // }

    // public function scopeEstiloSearch($query, $input)
    // {
    //     return $query->where("estilo", "like", "%$input%");
    // }
    // public function scopeAcabadoSearch($query, $input)
    // {
    //     return $query->where("acabado", "like", "%$input%");
    // }
    // public function scopeMarcaSearch($query, $input)
    // {
    //     return $query->where("marca", "like", "%$input%");
    // }
}

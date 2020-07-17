<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon;
use DB;

use App\Article;
use App\Banner;
use App\Family;
use App\Post;


class ResidecialController extends Controller
{

    private $fam;

    public function __construct()
    {
        $this->fam = Family::find(1);
    }

    public function aplicaciones()
    {
        return view('frontend.residencial.aplicaciones',[ 'aplicaciones' => $this->fam->aplications ]);
    }
    public function categoria()
    {
        return view('frontend.residencial.categoria');
    }

    public function categorias()
    {
        return view('frontend.residencial.categorias');
    }

    public function certificados()
    {
        return view('frontend.residencial.certificados');
    }

    public function contacto()
    {
        return view('frontend.residencial.contacto');
    }

    public function distribuidores()
    {
        return view('frontend.residencial.distribuidores');
    }

    public function index()
    {
        return view('frontend.residencial.index', ['destacados' => Family::find(2)]);
    }

    public function noticia($noticia)
    {
        return view('frontend.residencial.noticia' , ['noticia' => Post::slug($noticia)->first() ]);
    }

    public function noticias()
    {
      
            $dates = $this->fam
                    ->posts()
                    ->notDraft()
                    ->select('id', 'title', 'slug', 'created_at')
                    ->get()
                    ->groupBy(function($year) {
                        return Carbon::parse($year->created_at)->format('Y'); // Agrupar por año
                    });

            //dd($dates);
            return view('frontend.industrial.noticias', [
            'noticias' => $this->fam->posts()->notDraft()->latest('created_at')->paginate(5),
            'dates' => $dates 

            ]);
    }

    public function proyectos()
    {
        return view('frontend.residencial.proyectos');
    }

    public function productos()
    {
        return view('frontend.residencial.productos');
    }

    public function recursos()
    {
        return view('frontend.residencial.recursos');
    }

    public function servicios()
    {
        return view('frontend.residencial.servicios');
    }

}



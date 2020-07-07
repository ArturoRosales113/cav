<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('frontend.residencial.aplicaciones',[ 'aplicaciones' => Aplication::all() ]);
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

    public function proyectos()
    {
        return view('frontend.residencial.proyectos');
    }

    public function productos()
    {
        return view('frontend.residencial.productos');
    }

    public function servicios()
    {
        return view('frontend.residencial.servicios');
    }
    public function noticias()
    {
        return view('frontend.residencial.noticias', ['noticias' => $this->fam->posts]);
    }

    public function noticia(Noticia $noticia)
    {
        return view('frontend.residencial.noticia' , ['noticia' => $noticia ]);
    }

}



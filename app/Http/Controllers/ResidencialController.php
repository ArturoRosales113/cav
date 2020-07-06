<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Banner;
use App\Family;
use App\Post;


class ResidecialController extends Controller
{
    public function index()
    {
        return view('frontend.residencial.index', ['destacados' => Family::find(1)]);
    }

    public function productos()
    {
        return view('frontend.residencial.productos');
    }

    public function categorias()
    {
        return view('frontend.residencial.categorias');
    }

    public function categoria()
    {
        return view('frontend.residencial.categoria');
    }

    public function certificados()
    {
        return view('frontend.residencial.certificados');
    }

    public function aplicaciones()
    {
        return view('frontend.residencial.aplicaciones');
    }

    public function servicios()
    {
        return view('frontend.residencial.servicios');
    }

    public function proyectos()
    {
        return view('frontend.residencial.proyectos');
    }

    public function distribuidores()
    {
        return view('frontend.residencial.distribuidores');
    }

    public function contacto()
    {
        return view('frontend.residencial.contacto');
    }

    public function noticias()
    {
        return view('frontend.residencial.noticias', ['noticias' => Post::all()]);
    }

    public function noticia(Noticia $noticia)
    {
        return view('frontend.residencial.noticia' , ['noticia' => $noticia ]);
    }

}

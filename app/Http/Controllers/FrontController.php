<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function productos()
    {
        return view('frontend.productos');
    }

    public function categorias()
    {
        return view('frontend.categorias');
    }

    public function categoria()
    {
        return view('frontend.categoria');
    }

    public function aplicaciones()
    {
        return view('frontend.aplicaciones');
    }

    public function servicios()
    {
        return view('frontend.sericios');
    }

    public function proyectos()
    {
        return view('frontend.proyectos');
    }

    public function distribuidores()
    {
        return view('frontend.distribuidores');
    }

    public function contacto()
    {
        return view('frontend.contacto');
    }

}

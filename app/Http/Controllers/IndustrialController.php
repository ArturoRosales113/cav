<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrialController extends Controller
{
    public function index()
    {
        return view('frontend.industrial.index');
    }

    public function productos()
    {
        return view('frontend.industrial.productos');
    }

    public function categorias()
    {
        return view('frontend.industrial.categorias');
    }

    public function categoria()
    {
        return view('frontend.industrial.categoria');
    }

    public function aplicaciones()
    {
        return view('frontend.industrial.aplicaciones');
    }

    public function servicios()
    {
        return view('frontend.industrial.servicios');
    }

    public function proyectos()
    {
        return view('frontend.industrial.proyectos');
    }

    public function distribuidores()
    {
        return view('frontend.industrial.distribuidores');
    }

    public function contacto()
    {
        return view('frontend.industrial.contacto');
    }

}

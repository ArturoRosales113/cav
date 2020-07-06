<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Family;
use App\Article;
use App\Aplication;
use App\Proyect;
use App\Category;

class IndustrialController extends Controller
{
    public function index()
    {
        return view('frontend.industrial.index', ['destacados' => Family::find(2)]);
    }

    public function productos()
    {
        return view('frontend.industrial.productos');
    }

    public function categorias()
    {
        return view('frontend.industrial.categorias');
    }

    public function certificados()
    {
        return view('frontend.industrial.certificados');
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

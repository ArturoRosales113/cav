<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon;
use DB;

use App\Family;
use App\Article;
use App\Aplication;
use App\Proyect;
use App\Category;
use App\Post;

class IndustrialController extends Controller
{
    private $fam;

    public function __construct()
    {
        $this->fam = Family::find(2);
    }

    public function aplicaciones()
    {
        return view('frontend.industrial.aplicaciones',[ 'aplicaciones' => $this->fam->aplications ]);
    }

    public function categoria($categoryName)
    {
        return view('frontend.industrial.productos', [ 
            'category' => Category::name($categoryName),
            'articles' => Category::name($categoryName)->articles()->paginate(9)
            ]);
    }

    public function categorias()
    {
        return view('frontend.industrial.categorias', ['categories' => $this->fam->categories]);
    }

    public function certificados()
    {
        return view('frontend.industrial.certificados');
    }

    public function contacto()
    {
        return view('frontend.industrial.contacto');
    }

    public function distribuidores()
    {
        return view('frontend.industrial.distribuidores');
    }

    public function index()
    {
        return view('frontend.industrial.index', ['destacados' => $this->fam]);
    }

    public function noticias()
    {
        return view('frontend.industrial.noticias', ['noticias' => $this->fam->posts()->notDraft()->paginate(5)]);
    }

    public function noticia($noticia)
    {
        return view('frontend.industrial.noticia' , ['noticia' => Post::slug($noticia)->first() ]);
    }
  
    public function proyectos()
    {
        return view('frontend.industrial.proyectos');
    }

    public function producto($slug)
    {
        return view('frontend.industrial.producto', ['article' => Article::slug($slug)]);
    }

    public function productos()
    {
        return view('frontend.industrial.productos' , [
            'articles' => $this->fam->articles()->paginate(5),
            'categories' => $this->fam->categories
            ]);
    }
    
    public function recursos()
    {
        return view('frontend.industrial.recursos');
    }

    public function servicios()
    {
        return view('frontend.industrial.servicios');
    }

}

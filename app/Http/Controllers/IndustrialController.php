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

    public function busqueda(Request $request)
    {
        return view('frontend.industrial.busqueda',[
            'articles' => $this->fam->articles()->search($request->busqueda)->get(),
            'posts' => $this->fam->posts()->search($request->busqueda)->get()
        ]);
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
        return view('frontend.industrial.index', [
            'destacados' => $this->fam,
            'banners' => $this->fam->banners()->get()

            ]);
    }

    public function noticia($noticia)
    {
        return view('frontend.industrial.noticia' , ['noticia' => Post::slug($noticia)->first() ]);
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
        return view('frontend.industrial.proyectos', 
        [
            'proyectos' => $this->fam->proyects
        ]);
    }

    public function producto($slug)
    {
        return view('frontend.industrial.producto', ['article' => Article::slug($slug)->first() ]);
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

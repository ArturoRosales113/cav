<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\Article;
use App\Category;

class PavController extends Controller
{
    public function index($family)
    {
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.index',['fam' => $fam]);
    }

    public function aplicaciones($family){
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.aplicaciones',['fam' => $fam]);
    }


    public function noticias($family){
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.noticias',['fam' => $fam]);
    }

    public function proyectos($family)
    {
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.proyectos',['fam' => $fam]);
    }
    public function servicios($family)
    {
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.servicios',['fam' => $fam]);
    }
    public function recursos($family)
    {
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.recursos',['fam' => $fam]);
    }


    public function producto($family, $slug)
    {

        return view('frontend.producto', [
            'fam' => Family::where('name', '=', $family)->first(), 
            'article' => Article::slug($slug)->first()
        ]);
    }

    public function productos($family)
    {
        return view('frontend.productos' , [
            'fam' => Family::where('name', '=', $family)->first(),
            'articles' => Family::where('name', '=', $family)->first()->articles()->paginate(5),
            'categories' => Family::where('name', '=', $family)->first()->categories
            ]);
    }
    public function categoria($family, $categoryName)
    {
        return view('frontend.productos' , [
            'fam' => Family::where('name', '=', $family)->first(),
            'articles' => Category::where('name', '=', $categoryName)->first()->articles()->paginate(5),
            'categories' => Family::where('name', '=', $family)->first()->categories
            ]);
    }

    public function contacto(Request $request)
    {

        $fam = Family::where('name', '=', $request->family)->first();
        return view('frontend.contacto',['fam' => $fam]);
    }
    public function distribuidores(Request $request)
    {

        $fam = Family::where('name', '=', $request->family)->first();
        return view('frontend.distribuidores',['fam' => $fam]);
    }
    public function nosotros(Request $request)
    {

        $fam = Family::where('name', '=', $request->family)->first();
        return view('frontend.nosotros',['fam' => $fam]);
    }
    public function certificados(Request $request)
    {

        $fam = Family::where('name', '=', $request->family)->first();
        return view('frontend.certificados',['fam' => $fam]);
    }

    public function busqueda(Request $request)
    {
        $fam = Family::where('name', '=', $request->family)->first();
        return view('frontend.busqueda',[
            'fam' => $fam,
            'articles' => $fam->articles()->search($request->busqueda)->get(),
            'posts' => $fam->posts()->search($request->busqueda)->get()
        ]);
    }
    
}

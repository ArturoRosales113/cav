<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;

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


    public function contacto()
    {
        $fam = Family::where('name', '=', $family)->first();
        return view('frontend.contacto',['fam' => $fam]);
    }
}

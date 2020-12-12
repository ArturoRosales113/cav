<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Librerias
use Validator;
use File;

use App\Family;
use App\Mensaje;
use App\Article;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.welcome', [
                'families' => Family::all()
            ]);
    }

    public function privacidad()
    {
        return view('frontend.privacidad');
    }

    public function createMessage(Request $request)
    {
       $input = $request->all();

       $rules = [
           'nombre' => 'required',
           'correo' => 'required|email',
           'interes' => 'max:150'
       ];

       $messages = [
        'nombre.required' => 'El campo "Nombre" es obligatorio',
        'correo.required' => 'El campo "Coreo" es obligatorio.',
        'correo.email' => 'El email no es válido'
       ];

       $validator = Validator::make($input, $rules, $messages);

       if ($validator->fails()) {
          return redirect()
               ->back()
               ->withErrors($validator)
               ->withInput();

       } else {
        $msj = Mensaje::create([
            'nombre' => $input['nombre'],
            'correo' => $input['correo'],
            'interes' => $input['interes'],
 
           ]);

           if(array_key_exists('mensaje', $input)){
               $msj->mensaje = $input['mensaje'];
               $msj->save();
           }

        return redirect()->back()->with('success', 'Pronto un agente se podrá en contacto contigo');
    }
 }

 public function createCotizacion(Request $request)
    {
        $input = $request->all();

        $rules = [
            'nombre' => 'required',
            'correo' => 'required|email',
            'article_id' => 'not_in:0'
        ];

        $messages = [
        'nombre.required' => 'El campo "Nombre" es obligatorio',
        'correo.required' => 'El campo "Coreo" es obligatorio.',
        'correo.email' => 'El email no es válido',
        'article_id.not_in' => 'Debes seleccionar un artículo'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();

        } else {
        $msj = Mensaje::create([
            'nombre' => $input['nombre'],
            'correo' => $input['correo'],
            'interes' => $input['interes'],
            ]);
        $article = Article::find($input['article_id']);
        $msj->articles()->save($article);

        return redirect()->back()->with('success', 'Cotización solicitada, en breve un agente se pondrá en contacto.');
        }      
    }

}

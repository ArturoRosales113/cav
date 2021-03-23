<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Librerias
use Validator;
use File;

use App\Family;
use App\Mensaje;
use App\Article;
use App\Distributor;

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

 public function createDistribuidor(Request $request)
 {
    $input = $request->all();
    $rules = [
        'nombre' => 'required',
        'razonSocial' => 'required',
        'paginaWeb' => 'required',
        'correo' => 'required|email',
        'telefonoFijo' => 'required',
        'telefonoCelular' => 'required',
        'pais' => 'required',
        'estado' => 'required',
        'ciudad' => 'required',
        'calle' => 'required',
        'numeroExterior' => 'required',
        'codigoPostal' => 'required'
    ];

    $messages = [
        'nombre.required' => 'El campo "nombre" es obligatorio',
        'razonSocial.required' => 'El campo "razón social" es obligatorio',
        'paginaWeb.required' => 'El campo "página web" es obligatorio',
        'correo.required' => 'El campo "Correo" es obligatorio',
        'correo.email' => 'El email no es válido',
        'telefonoFijo.required' => 'El campo "Teléfono" es obligatorio',
        'telefonoCelular.required' => 'El campo "Celular" es obligatorio',
        'pais.required' => 'El campo "País" es obligatorio',
        'estado.required' => 'El campo "Estado" es obligatorio',
        'ciudad.required' => 'El campo "Ciudad" es obligatorio',
        'calle.required' => 'El campo "Calle" es obligatorio',
        'numeroExterior.required' => 'El campo "Numero Exterior" es obligatorio',
        'codigoPostal.required' => 'El campo "Código Postal" es obligatorio'
    ];


    $validator = Validator::make($input, $rules, $messages);

    if ($validator->fails()) {
       return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();

    } else {
     $msj = Distributor::create($request->all());
     return redirect()->back()->with('success', 'Pronto un agente se podrá en contacto contigo');
 }
}

 public function createCotizacion(Request $request)
    {
        $input = $request->all();

        $rules = [
            'nombre' => 'required',
            'correo' => 'required|email'
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
            'correo' => $input['correo']
            ]);
        $article = Article::find($input['article_id']);
        $msj->articles()->save($article);

        return redirect()->back()->with('success', 'Cotización solicitada, en breve un agente se pondrá en contacto.');
        }      
    }

}

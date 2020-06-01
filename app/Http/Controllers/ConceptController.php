<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Concept;
use Validator;
use Session;
use File;


class ConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concepts = Concept::all();
        return view('backend.concept.index', ['concepts' => $concepts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.concept.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
         'name' => 'required',
         'file' => 'image|mimes:jpeg,bmp,png|max:400'
        ];
        $messages = [
         'name.required' => 'El campo "Nombre" es obligatorio',
         'file.image' => 'El archivo no es una imagen',
         'file.mimes' => 'El formato de la imagen no es válido',
         'file.size' => 'El tamaño del archivo debe ser menor a 400kb',
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()
                   ->back()
                   ->withErrors($validator)
                   ->withInput();
        } else {
            //dd($input);
            $concept = Concept::create([
          'name' => str_replace(' ', '', strtolower($input['name'])),
          'display_name' => ucwords($input['name']),
         ]);
        if ($input['description'] != null) {
            $concept->description = $input['description'];
            $concept->save();
        }
        if($input['file']){
            //dd($input['file']);
            $file = Input::file('file');
            $file_name = $concept->name.'.'.$file->getClientOriginalExtension();
            $file->move('img/categorys/', $file_name);
            $concept->img_path = 'img/categorys/'.$file_name;
            $concept->save();
        }
            return redirect()->route('concept.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function show(Concept $concept)
    {
        return view('backend.concept.show', ['concept' => $concept]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function edit(Concept $concept)
    {
        return view('backend.concept.edit', ['concept' => $concept]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concept $concept)
    {
        $input = $request->all();
        //dd($input);
        $rules = [
         'name' => 'required',
         'file' => 'image|mimes:jpg,jpeg,bmp,png|max:400'
        ];
        $messages = [
         'name.required' => 'El campo "Nombre" es obligatorio',
         'file.image' => 'El archivo no es una imagen',
         'file.mimes' => 'El formato de la imagen no es válido',
         'file.size' => 'El tamaño del archivo debe ser menor a 400kb',
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            if($input['file']){
                //Borrar Archivo
                if($concept->img_path != null){
                    $dfile = $concept->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                //Actualizar Archivo
                $file = Input::file('file');
                $file_name = $concept->name.'.'.$file->getClientOriginalExtension();
                $file->move('img/categorys/', $file_name);
                $concept->img_path = 'img/categorys/'.$file_name;
            }
            $concept->name = str_replace(' ', '', strtolower($input['name']));
            $concept->display_name = ucwords($input['name']);
            if ($input['description'] != null) {
                $concept->description = $input['description'];
            }
            $concept->save();
            return redirect()->route('concept.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concept  $concept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concept $concept)
    {
    
      if($concept->img_path != null){
        $dfile = $concept->img_path;
        $filename = public_path($dfile);
        File::delete($filename);
      }
      $concept->delete();
      return redirect()->route('concept.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Marca;
use Validator;
use Session;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $marcas = Marca::all();
       return view('backend.marca.index',['marcas' => $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.marca.create');
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
     ];
        $messages = [
      'name.required' => 'El campo "Nombre" es obligatorio',
     ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        } else {
            $marca = Marca::create([
          'name' => str_replace(' ', '', strtolower($input['name'])),
          'display_name' => ucwords($input['name']),
         ]);
            if ($input['description'] != null) {
                $marca->description = $input['description'];
                $marca->save();
            }
            Session::flash('message', 'Tipo de acabado creado');
            return redirect()->route('marca.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        return view('backend.marca.show',['marca' => $marca]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
       return view('backend.marca.edit', ['marca' => $marca]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
     $input = $request->all();
     //dd($input);
     $rules = [
      'name' => 'required',
     ];
     $messages = [
      'name.required' => 'El campo "Nombre" es obligatorio',
     ];
     $validator = Validator::make($input, $rules, $messages);
     if ($validator->fails()) {
         //dd($validator);
         return redirect()->back()
         ->withErrors($validator)
         ->withInput();
     } else {
         $marca->name = str_replace(' ', '', strtolower($input['display_name']));
         $marca->display_name = ucwords($input['display_name']);
         if ($input['description'] != null) {
             $marca->description = $input['description'];
         }
         $marca->save();
         return redirect()->route('marca.index');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
      $marca->delete();
      return redirect()->route('marca.index');
    }
}

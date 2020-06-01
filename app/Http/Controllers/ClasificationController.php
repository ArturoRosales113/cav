<?php

namespace App\Http\Controllers;

use App\Clasification;
use App\Concept;
use Validator;
use Session;
use Illuminate\Http\Request;

class ClasificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clas = Clasification::all();
       return view('backend.clasification.index',['clasifications' => $clas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concepts = Concept::all();
        return view('backend.clasification.create',['concepts' => $concepts]);
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
         'concept_id' => 'required|not_in:0',
        ];
        $messages = [
         'name.required' => 'El campo "Nombre" es obligatorio',
         'concept_id.required' => 'Debes Seleccionar un concepto',
         'concept_id.not_in' => 'Debes seleccionar una concepto',
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
           ->withErrors($validator)
           ->withInput();
        } else {
          $clasification = Clasification::create([
           'name' => str_replace(' ', '', strtolower($input['name'])),
           'display_name' => ucwords($input['name']),
           'concept_id' => $input['concept_id'],
          ]);
          if($input['description'] != null){
            $clasification->description = $input['description'];
            $clasification->save();
          }
          return redirect()->route('clasification.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function show(Clasification $clasification)
    {
        return view('backend.clasification.show', ['clasification' => $clasification]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasification $clasification)
    {
        $concepts = Concept::all();
        return view('backend.clasification.edit', [
         'clasification' => $clasification,
         'concepts' => $concepts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasification $clasification)
    {
     $input = $request->all();
     $rules = [
      'display_name' => 'required',
      'concept_id' => 'required|not_in:0',
     ];
     $messages = [
      'display_name.required' => 'El campo "Nombre" es obligatorio',
      'concept_id.required' => 'Debes Seleccionar un concepto',
      'concept_id.not_in' => 'Debes seleccionar una concepto',
     ];
     $validator = Validator::make($input, $rules, $messages);
     if ($validator->fails()) {
         //dd($validator);
         return redirect()->back()
        ->withErrors($validator)
        ->withInput();
     } else {
       $clasification->name = str_replace(' ', '', strtolower($input['display_name']));
       $clasification->display_name = ucwords($input['display_name']);
       $clasification->concept_id = $input['concept_id'];
       if($input['description'] != null){
         $clasification->description = $input['description'];
       }
       $clasification->save();
       return redirect()->route('clasification.index');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasification $clasification)
    {
      $clasification->delete();
      return redirect()->route('clasification.index');
    }
}

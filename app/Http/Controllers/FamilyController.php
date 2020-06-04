<?php

namespace App\Http\Controllers;

use App\Family;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.family.index', ['families' => Family::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.family.create');
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
          $fam = Family::create([
           'name' => str_replace(' ', '', strtolower($input['name'])),
           'display_name' => ucwords($input['name']),
           'description' => $input['description']
          ]);
            //dd($input);
          if(array_key_exists('photo', $input) && $input['photo'] != null ){
            $file = Input::file('photo');
            $file_name = $fam->name.'.'.$file->getClientOriginalExtension();
            $file->move('img/brand/', $file_name);
            $fam->img_path = 'img/brand/'.$file_name;
        }
          if(array_key_exists('logo', $input) && $input['logo'] != null){
            $file = Input::file('logo');
            $file_name = $fam->name.'.'.$file->getClientOriginalExtension();
            $file->move('img/brand/', $file_name);
            $fam->img_path = 'img/brand/'.$file_name;
        }
        $fam->save();
          return redirect()->route('family.index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        return view('backend.family.show', ['family' => $family]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        return view('backend.family.edit', ['family' => $family]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
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
                if($family->img_path != null){
                    $dfile = $family->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                //Actualizar Archivo
                $file = Input::file('file');
                $file_name = $family->name.'.'.$file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $family->img_path = 'img/families/'.$file_name;
            }
            $family->name = str_replace(' ', '', strtolower($input['name']));
            $family->display_name = ucwords($input['name']);
            if ($input['description'] != null) {
                $family->description = $input['description'];
            }
            $family->save();
            return redirect()->route('family.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {

    }
}

<?php

namespace App\Http\Controllers;

use App\Family;

use Validator;
use SweetAlert;
use File;
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
        //dd($input);
        $rules = [
            'name' => 'required',
            'description' => 'max:256',
            'photo' => 'image|max:150',
            'logo' => 'image|max:100'
        ];
        $validator = Validator::make($input, $rules);
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

            if (array_key_exists('photo', $input) && $input['photo'] != null) {
                $file = Input::file('photo');
                $file_name = $fam->name . '-banner' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $fam->img_path = 'img/brand/' . $file_name;
            }
            if (array_key_exists('logo', $input) && $input['logo'] != null) {
                $file = Input::file('logo');
                $file_name = $fam->name . '-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $fam->icon_path = 'img/brand/' . $file_name;
            }
            $fam->save();
            return redirect()->route('family.index')->with('success', 'Información almacenada');
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
        return view('backend.family.show', [
            'family' => $family,
            'families' => Family::all()]);
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
        //dd('hola');
        $input = $request->all();
        //dd($input);
        $rules = [
            'name' => 'max:55',
            'description' => 'max:256',
            'photo' => 'image|max:150',
            'logo' => 'image|max:100'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            if (array_key_exists('photo', $input) && $input['photo'] != null) {
                //Borrar Archivo
                if ($family->img_path != null) {
                    $dfile = $family->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('photo');
                $file_name = $family->name . '-banner' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $family->img_path = 'img/brand/' . $file_name;
            }
            if (array_key_exists('logo', $input) && $input['logo'] != null) {
                //Borrar Archivo
                if ($family->icon_path != null) {
                    $dfile = $family->icon_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('logo');
                $file_name = $family->name . '-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $family->icon_path = 'img/brand/' . $file_name;
            }

            $family->name = str_replace(' ', '', strtolower($input['name']));
            $family->display_name = ucwords($input['name']);
            if ($input['description'] != null) {
                $family->description = $input['description'];
            }
            $family->save();
            return redirect()->route('family.index')->with('success', 'Información actualizada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Family $family)
    {
       if($request->transfer == 'true')
       {
        if($family->articles()->count() > 0){
            foreach($family->articles() as $fa){
                $fa->family_id = $request->family_id;
                $fa->save();
            }
        }
       }
    //En caso de tener banner eliminarlo
    if ($family->img_path != null) {
       $dfile = $family->img_path;
       $filename = public_path($dfile);
       File::delete($filename);
    }
    //En caso de tener icono eliminarlo
    if ($family->icon_path != null) {
        $dfile = $family->icon_path;
        $filename = public_path($dfile);
        File::delete($filename);
    }
    //Borrar modelo
    $family->delete();
    return redirect()->route('family.index')->with('success', 'Elimiinado');
    }


    public function photoDelete(Family $family)
    {
        $dfile = $family->img_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $family->img_path = null;
        $family->save();
        return redirect()->back()->with('success', 'Imagen Eliminada');
    }
    public function iconDelete(Family $family)
    {
        $dfile = $family->icon_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $family->icon_path = null;
        $family->save();
        return redirect()->back()->with('success', 'Icono Eliminado');
    }

    }

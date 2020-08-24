<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\Family;
use App\Aplication;

use Validator;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.proyect.index', ['proyects' => Proyect::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.proyect.create', ['aplications' => Aplication::all()]);
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
            'description' => 'required',
            'date' => 'required',
            'img_path' => 'mimes:jpg,jpeg,png|max:950',
            'aplication_id' => 'not_in:0',
            'pdf_path' => 'mimes:jpg,jpeg,png|max:3950'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $proyect = Proyect::create([
                'name' => $input['name'],
                'slug' => str_replace(' ', '-', strtolower($input['name'])),
                'date' => $input['date'],
                'aplication_id' => $input['aplication_id'],
                'description' => $input['description']
            ]);

            if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
                $file = Input::file('img_path');
                $file_name = $proyect->name . '-proyect-photo' . '.' . $file->getClientOriginalExtension();
                $file->move('proyects/', $file_name);
                $proyect->img_path = 'proyects/' . $file_name;
            }

            if (array_key_exists('pdf_path', $input) && $input['pdf_path'] != null) {
                $file = Input::file('pdf_path');
                $file_name = $proyect->name . '-proyect' . '.' . $file->getClientOriginalExtension();
                $file->move('proyects/', $file_name);
                $proyect->pdf_path = 'proyects/' . $file_name;
            }

            if (array_key_exists('pdf_path', $input) && $input['pdf_path'] != null) {
                $file = Input::file('pdf_path');
                $file_name = $proyect->name . '-proyect-pdf' . '.' . $file->getClientOriginalExtension();
                $file->move('proyects/', $file_name);
                $proyect->banner_path = 'proyects/' . $file_name;
            }

            $proyect->save();
            return redirect()->route('proyect.index')->with('success', 'Proyecto almacenado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {
        return view ('backend.proyect.show', [
            'proyect' => $proyect,
            'aplications' => Aplication::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect)
    {
        return view('backend.proyect.edit', [
            'proyect' => $proyect,
            'aplications' => Aplication::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {
        $input = $request->all();
        //dd($input);
         $rules = [
             'name' => 'required',
             'description' => 'required',
             'img_path' => 'mimes:jpg,jpeg,png|max:950',
             'banner_path' => 'mimes:jpg,jpeg,png|max:950',
             'pdf_path' => 'mimes:jpg,jpeg,png|max:3950'
         ];
 
         $messages = [
             'name.required' => 'El campo "Nombre" es obligatorio',
             'img_path.mimes' => 'El formato de la imagen no es válido',
             'img_path.max' => 'El tamaño del archivo debe ser menor a 400kb',
             'banner_path.mimes' => 'El formato de la imagen no es válido',
             'banner_path.max' => 'El tamaño del archivo debe ser menor a 400kb',
             'pdf_path.mimes' => 'El formato de la del archivo debe ser una imagen',
         ];
 
         $validator = Validator::make($input, $rules, $messages);
         if ($validator->fails()) {
             //dd($validator);
             return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
         } else {
 
             if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
                 //Borrar Archivo
                 if ($proyect->img_path != null) {
                     $dfile = $proyect->img_path;
                     $filename = public_path($dfile);
                     File::delete($filename);
                 }
                 $file = Input::file('img_path');
                 $file_name = $proyect->name . '-proyect' . '.' . $file->getClientOriginalExtension();
                 $file->move('img/brand/', $file_name);
                 $proyect->img_path = 'img/brand/' . $file_name;
             }
 
             if (array_key_exists('banner_path', $input) && $input['banner_path'] != null) {
                 //Borrar Archivo
                 if ($proyect->banner_path != null) {
                     $dfile = $proyect->banner_path;
                     $filename = public_path($dfile);
                     File::delete($filename);
                 }
                 $file = Input::file('banner_path');
                 $file_name = $proyect->name . '-proyect' . '.' . $file->getClientOriginalExtension();
                 $file->move('img/brand/', $file_name);
                 $proyect->banner_path = 'img/brand/' . $file_name;
             }
 
             if (array_key_exists('pdf_path', $input) && $input['pdf_path'] != null) {
                 //Borrar Archivo
                 if ($proyect->icon_path != null) {
                     $dfile = $proyect->icon_path;
                     $filename = public_path($dfile);
                     File::delete($filename);
                 }
                 $file = Input::file('pdf_path');
                 $file_name = $proyect->name . '-proyect' . '.' . $file->getClientOriginalExtension();
                 $file->move('img/brand/', $file_name);
                 $proyect->pdf_path = 'img/brand/' . $file_name;
             }
 
             $proyect->name = $input['name'];
             $proyect->slug = str_replace(' ', '-', strtolower($input['name']));
             $proyect->description = $input['description'];
             $proyect->aplication_id = $input['aplication_id'];
             $proyect->save();
             return redirect()->back()->with('success', 'Información actualizada');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
        if ($proyect->img_path != null) {
            $dfile = $proyect->img_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        if ($proyect->banner_path != null) {
            $dfile = $proyect->banner_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        if ($proyect->pdf_path != null) {
            $dfile = $proyect->pdf_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        $proyect->delete();
        return redirect()->back()->with('success', 'Información actualizada');
    }
    public function pdfDelete(Proyect $proyect)
    {


        if ($proyect->pdf_path != null) {
            $dfile = $proyect->icon_path;
            $filename = public_path($dfile);
            File::delete($filename);
            $proyect->pdf_path = null;
            $proyect->save();
        }
        return redirect()->back()->with('success', 'Información actualizada');



    }
    public function delete(Proyect $proyect)
    {


        if ($proyect->img_path != null) {
            $dfile = $proyect->icon_path;
            $filename = public_path($dfile);
            File::delete($filename);
            $proyect->img_path = null;
            $proyect->save();
        }
        return redirect()->back()->with('success', 'Información actualizada');



    }
}

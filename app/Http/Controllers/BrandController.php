<?php

namespace App\Http\Controllers;

use App\Brand;

use Validator;
use SweetAlert;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend.brand.index' , ['brands' => Brand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
          $brand = Brand::create([
            'name' => str_replace(' ', '', strtolower($input['name'])),
            'display_name' => ucwords($input['name']),
            'description' => $input['description']
          ]);
          if($input['description'] != null){
            $brand->description = $input['description'];
          }

        if (array_key_exists('photo', $input) && $input['photo'] != null) {
            $file = Input::file('photo');
            $file_name = $brand->name . '-banner' . '.' . $file->getClientOriginalExtension();
            $file->move('img/brand/', $file_name);
            $brand->img_path = 'img/brand/' . $file_name;
        }
        if (array_key_exists('logo', $input) && $input['logo'] != null) {
            $file = Input::file('logo');
            $file_name = $brand->name . '-icon' . '.' . $file->getClientOriginalExtension();
            $file->move('img/brand/', $file_name);
            $brand->icon_path = 'img/brand/' . $file_name;
        }
        $brand->save();
          return redirect()->route('brand.index')->with('success', 'Información almacenada');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('backend.brand.show', [
            'brand' => $brand,
            'brands' => Brand::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
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

            if (array_key_exists('photo', $input) && $input['photo'] != null) {
                //Borrar Archivo
                if ($brand->img_path != null) {
                    $dfile = $brand->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('photo');
                $file_name = $brand->name . '-banner' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $brand->img_path = 'img/brand/' . $file_name;
            }
            if (array_key_exists('logo', $input) && $input['logo'] != null) {
                //Borrar Archivo
                if ($brand->icon_path != null) {
                    $dfile = $brand->icon_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('logo');
                $file_name = $brand->name . '-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $brand->icon_path = 'img/brand/' . $file_name;
            }

            $brand->name = str_replace(' ', '', strtolower($input['name']));
            $brand->display_name = ucwords($input['name']);
            if ($input['description'] != null) {
                $brand->description = $input['description'];
            }
            $brand->save();
            return redirect()->route('brand.index')->with('success', 'Información actualizada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Brand $brand)
    {
        if ($request->transfer == 'true') {
            if ($brand->articles()->count() > 0) {
                foreach ($brand->articles() as $fa) {
                    $fa->category_id = $request->category_id;
                    $fa->save();
                }
            }
        }
        //En caso de tener banner eliminarlo
        if ($brand->img_path != null) {
            $dfile = $brand->img_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }
        //En caso de tener icono eliminarlo
        if ($brand->icon_path != null) {
            $dfile = $brand->icon_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }
        //Borrar modelo
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Elimiinado');
    }

    public function photoDelete(Brand $brand)
    {
        $dfile = $brand->img_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $brand->img_path = null;
        $brand->save();
        return redirect()->back()->with('success', 'Imagen Eliminada');
    }
    public function iconDelete(Brand $brand)
    {
        $dfile = $brand->icon_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $brand->icon_path = null;
        $brand->save();
        return redirect()->back()->with('success', 'Icono Eliminado');
    }
}

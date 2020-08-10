<?php

namespace App\Http\Controllers;

use App\Category;
use App\Family;


use Validator;
use SweetAlert;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.index', [
            'categories' => Category::all(),
            'families' => Family::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create',['families' => Family::all() ]);
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
            $cat = Category::create([
                'name' => str_replace(' ', '', strtolower($input['name'])),
                'display_name' => ucwords($input['name']),
                'description' => $input['description'],
                'family_id' => $input['family_id']
            ]);


            if (array_key_exists('photo', $input) && $input['photo'] != null) {
                $file = Input::file('photo');
                $file_name = $cat->name . '-banner' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $cat->img_path = 'img/brand/' . $file_name;
            }
            if (array_key_exists('logo', $input) && $input['logo'] != null) {
                $file = Input::file('logo');
                $file_name = $cat->name . '-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $cat->icon_path = 'img/brand/' . $file_name;
            }
            $cat->save();
            return redirect()->route('category.index')->with('success', 'Información almacenada');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.category.show', [
            'category' => $category,
            'categories' => Category::all(),
            'families' => Family::all() 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', [
            'category' => $category,
            'families' => Family::all() 
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
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
                if ($category->img_path != null) {
                    $dfile = $category->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('photo');
                $file_name = $category->name . '-banner' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $category->img_path = 'img/brand/' . $file_name;
            }
            if (array_key_exists('logo', $input) && $input['logo'] != null) {
                //Borrar Archivo
                if ($category->icon_path != null) {
                    $dfile = $category->icon_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('logo');
                $file_name = $category->name . '-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $category->icon_path = 'img/brand/' . $file_name;
            }

            $category->name = str_replace(' ', '', strtolower($input['name']));
            $category->display_name = ucwords($input['name']);
            $category->family_id = ucwords($input['family_id']);
            if ($input['description'] != null) {
                $category->description = $input['description'];
            }
            $category->save();
            return redirect()->route('category.index')->with('success', 'Información actualizada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        if ($request->transfer == 'true') {
            if ($category->articles()->count() > 0) {
                foreach ($category->articles() as $fa) {
                    $fa->category_id = $request->category_id;
                    $fa->save();
                }
            }
        }
        //En caso de tener banner eliminarlo
        if ($category->img_path != null) {
            $dfile = $category->img_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }
        //En caso de tener icono eliminarlo
        if ($category->icon_path != null) {
            $dfile = $category->icon_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }
        //Borrar modelo
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Elimiinado');
    }

    public function photoDelete(Category $category)
    {
        $dfile = $category->img_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $category->img_path = null;
        $category->save();
        return redirect()->back()->with('success', 'Imagen Eliminada');
    }
    public function iconDelete(Category $category)
    {
        $dfile = $category->icon_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $category->icon_path = null;
        $category->save();
        return redirect()->back()->with('success', 'Icono Eliminado');
    }
}

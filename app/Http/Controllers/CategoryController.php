<?php

namespace App\Http\Controllers;

use App\Category;


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
        return view('backend.category.index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
          $cat = Category::create([
           'name' => str_replace(' ', '', strtolower($input['name'])),
           'display_name' => ucwords($input['name']),
           'concept_id' => $input['concept_id'],
          ]);
          if($input['description'] != null){
            $cat->description = $input['description'];

          }
          if($input['file']){
            $file = Input::file('file');
            $file_name = $cat->name.'.'.$file->getClientOriginalExtension();
            $file->move('img/brand/', $file_name);
            $cat->img_path = 'img/brand/'.$file_name;
            $cat->save();
        }
          return redirect()->route('family.index');
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
        return view('backend.category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', ['category' => $category]);
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
            if($input['file']){
                //Borrar Archivo
                if($$category->img_path != null){
                    $dfile = $$category->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                //Actualizar Archivo
                $file = Input::file('file');
                $file_name = $$category->name.'.'.$file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $$category->img_path = 'img/families/'.$file_name;
            }
            $$category->name = str_replace(' ', '', strtolower($input['name']));
            $$category->display_name = ucwords($input['name']);
            if ($input['description'] != null) {
                $$category->description = $input['description'];
            }
            $$category->save();
            return redirect()->route('family.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

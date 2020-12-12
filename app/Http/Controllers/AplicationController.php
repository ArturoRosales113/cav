<?php

namespace App\Http\Controllers;


//Librerias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use SweetAlert;
use Validator;

//Modelos
use App\Aplication;
use App\Family;
use App\Article;
use App\Category;



class AplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.aplication.index', [
            'aplications' => Aplication::all(),
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
        return view('backend.aplication.create', ['families' => Family::all()]);
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
            'description' => 'required',
            'img_path' => 'mimes:jpg,jpeg,png|max:950',
            'family_id' => 'required|not_in:0',
            'pdf_path' => 'mimes:pdf'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $aplication = Aplication::create([
                'name' => str_replace(' ', '', strtolower($input['name'])),
                'display_name' => ucwords($input['name']),
                'family_id' => $input['family_id'],
                'description' => $input['description']
            ]);

            if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
                $file = Input::file('img_path');
                $file_name = $aplication->name . '-aplication' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->img_path = 'img/brand/' . $file_name;
            }

            if (array_key_exists('icon_path', $input) && $input['icon_path'] != null) {
                $file = Input::file('icon_path');
                $file_name = $aplication->name . '-aplication-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->icon_path = 'img/brand/' . $file_name;
            }

            if (array_key_exists('pdf_path', $input) && $input['pdf_path'] != null) {
                $file = Input::file('pdf_path');
                $file_name = $aplication->name . '-aplication' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->pdf_path = 'img/brand/' . $file_name;
            }
            $aplication->save();
            return redirect()->route('aplication.index')->with('success', 'Información almacenada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function show(Aplication $aplication)
    {
        return view('backend.aplication.show', [
            'aplication' => $aplication,
            'categories' => Category::all(),
            'families' => Family::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplication $aplication)
    {
        return view('backend.aplication.edit', [
            'aplication' => $aplication,
            'families' => Family::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aplication $aplication)
    {
        $input = $request->all();
       //dd($input);
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'img_path' => 'mimes:jpg,jpeg,png|max:950',
            'family_id' => 'required|not_in:0',
            'pdf_path' => 'mimes:pdf'
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

            if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
                //Borrar Archivo
                if ($aplication->img_path != null) {
                    $dfile = $aplication->img_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('img_path');
                $file_name = $aplication->name . '-aplication' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->img_path = 'img/brand/' . $file_name;
            }

            if (array_key_exists('icon_path', $input) && $input['icon_path'] != null) {
                //Borrar Archivo
                if ($aplication->icon_path != null) {
                    $dfile = $aplication->icon_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('icon_path');
                $file_name = $aplication->name . '-aplication-icon' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->icon_path = 'img/brand/' . $file_name;
            }

            if (array_key_exists('pdf_path', $input) && $input['pdf_path'] != null) {
                //Borrar Archivo
                if ($aplication->icon_path != null) {
                    $dfile = $aplication->icon_path;
                    $filename = public_path($dfile);
                    File::delete($filename);
                }
                $file = Input::file('pdf_path');
                $file_name = $aplication->name . '-aplication' . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $aplication->pdf_path = 'img/brand/' . $file_name;
            }

            $aplication->name = str_replace(' ', '', strtolower($input['name']));
            $aplication->display_name = ucwords($input['name']);
            $aplication->description = $input['description'];
            $aplication->family_id = $input['family_id'];
            $aplication->save();
            return redirect()->back()->with('success', 'Información actualizada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Aplication $aplication)
    {
        foreach($aplication->articles as $aa)
        {   
            $dfile = $aa->pivot->img_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        if($aplication->img_path != null){
            
            $dfile = $aplication->img_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        if($aplication->pdf_path != null)
        {
            $dfile = $aplication->pdf_path;
            $filename = public_path($dfile);
            File::delete($filename);
        }

        $aplication->delete();

        return redirect()->back()->with('success', 'Se ha eliminado de manera correcta');
    }  
    
    /* Remover imagen del la aplicación
    *
    * @param  \App\Aplication  $aplication
    * @return \Illuminate\Http\Response
    */

    public function delete(Aplication $aplication)
    {
        $dfile = $aplication->img_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $aplication->img_path = null;
        $aplication->save();
        return redirect()->back()->with('success', 'Archivo Eliminado');
    }

    public function iconDelete(Aplication $aplication)
    {
        $dfile = $aplication->icon_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $aplication->icon_path = null;
        $aplication->save();
        return redirect()->back()->with('success', 'Archivo Eliminado');
    }

        /* Remover pdf adjunto del la aplicación
    *
    * @param  \App\Aplication  $aplication
    * @return \Illuminate\Http\Response
    */

    public function pdfDelete(Aplication $aplication)
    {
        $dfile = $aplication->pdf_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $aplication->pdf_path = null;
        $aplication->save();
        return redirect()->back()->with('success', 'Archivo Eliminado');
    }

    /* Relacionar productos con la aplicación
    *
    * @param  \App\Aplication  $aplication
    * @return \Illuminate\Http\Response
    */

    public function addArticle(Request $request, Aplication $aplication)
    {
        $input = $request->all();
        $rules = [
             'article_id' => 'not_in:0',
             'article_img_path' => 'mimes:jpg,jpeg,png|max:2048',
        ];
 
        $messages = [
            'article_id.not_in' => 'Selecciona un producto',
            'article_img_path.mimes' => 'El formato de la imagen no es válido. ( jpg, jpeg, png )'
        ];
 
        $validator = Validator::make($input, $rules, $messages);
         if ($validator->fails()) {
             
             return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
         } else {
            $article = Article::find($input['article_id']);
            // $file = Input::file('article_img_path');
            // $file_name ='article_'. $article->id . '-aplication_' . $aplication->id . '.' . $file->getClientOriginalExtension();
            // $file_path = 'article_aplications/' . $file_name;
            // $file->move('article_aplications/', $file_name);
            $aplication->articles()->attach([$input['article_id']]);
            if($input['article_description'] != null)
            {
                $aplication->articles()->updateExistingPivot($input['article_id'], ['description' => $input['article_description']]);
            }
       
            return redirect()->route('aplication.show', $aplication->id)->with('success', 'El producto ahora esta relacionado con '.$aplication->display_name);
         } 
    }

   /* remover articulo de la aplicacion
    *
    * @param  \App\Aplication  $aplication
    * @return \Illuminate\Http\Response
    */

    public function removeArticle(Request $request, Aplication $aplication)
    {
        $dfile = $request->delete_path;
        $filename = public_path($dfile);
        File::delete($filename);
        $aplication->articles()->detach($request->article_id);
        return redirect()->back()->with('success', 'Producto desviculado de manera correcta.');
        
    }
}

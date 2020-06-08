<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

//Librerias
use Auth;
use Validator;
use Image;
use File;
use View;
use Session;
use Config;

//Modelos
use App\Article;
use App\Brand;
use App\Category;
use App\Download;
use App\Family;



class ArticleController extends Controller


    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.article.index', [
         'articles' => Article::all(),
         'families' => Family::all(),
         'categories'=> Category::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.article.create',[
        'brands' => Brand::all(),
        'families' => Family::all()
       ]);
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
        'titulo' => 'required',
        'estilo' => 'required',
        'concept_id' => 'required|not_in:0',
       ];
       $messages = [
        'titulo.required' => 'El campo título es obligatorio',
        'marca_id.required' => 'El campo "Marca" es obligatorio',
        'acabado_id.not_in' => 'Debes seleccionar un acabado',
        'marca_id.not_in' => 'Debes seleccionar un acabado',
        'concept_id.not_in' => 'Debes seleccionar un concepto',
        'linea_id.not_in' => 'Debes seleccionar una línea',
        'concept_id.not_in' => 'Debes seleccionar un concepto',
        'estilo.required' => 'El campo "Estilo" es obligatorio',
        'acabado_id.required' => 'El campo "Acabado" es obligatorio',
        'linea_id.required' => 'El campo "Línea" es obligatorio',
       ];
       $validator = Validator::make($input, $rules, $messages);
       if ($validator->fails()) {
           //dd($validator);
           return redirect()->back()
          ->withErrors($validator)
          ->withInput();
       } else {
        //dd($input);
        $art = Article::create([
         'titulo' => $input['titulo'],
         'estilo' => $input['estilo'],
         'concept_id' => $input['concept_id'],
         'description' => $input['description'],
        ]);

        if ($input['clasification_id'] !=0 ) {
          $art->clasification_id = $input['clasification_id'];
        }else{
          $art->clasification_id = null;
        }
        if (isset($input['is_trend'])) {
          $art->is_trend = 1;
        }else{
          $art->is_trend = 0;
        }
        $art->slug =str_replace(' ','-', $input['titulo']);
        $art->save();
        }
        return redirect()->route('article.show',$art->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vestido = Article::find($id);
      $stores = Store::all();
      return view('backend.article.show', [
       'vestido' => $vestido,
       'stores' => $stores
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $con = Concept::all();
        $marca = Marca::all();
        $linea = Linea::all();
        $acabado = Acabado::all();
        $clas = Clasification::all();
        return view('backend.article.edit',[
         'article' => $article,
         'marca' => $marca,
         'linea' => $linea,
         'acabado' => $acabado,
         'con' => $con,
         'clas' => $clas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $input = $request->all();
       //dd($input);
       $rules = [
        'titulo' => 'required',
        'estilo' => 'required',
        'description' => ''
       ];
       $messages = [
        'titulo.required' => 'El campo título es obligatorio',
        'estilo.required' => 'El campo "Codigo" es obligatorio'
       ];
       $validator = Validator::make($input, $rules, $messages);
       if ($validator->fails()) {
           //dd($validator);
           return redirect()->back()
          ->withErrors($validator)
          ->withInput();
       } else {

       $art = Article::find($id);
       $art->titulo = $input['titulo'];
       $art->estilo = $input['estilo'];
       $art->description = $input['description'];
       $art->concept_id = $input['concept_id'];
       $art->clasification_id = $input['clasification_id'];
       $art->slug =str_replace(' ','-', $input['titulo']);

       if (isset($input['is_trend'])) {
         $art->is_trend = 1;
       }else{
         $art->is_trend = 0;
       }

       $art->save();
       return redirect()->route('article.show',$art->id);

      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $article = Article::find($id);
       if ($article->pics()->count() > 0) {
         foreach ($article->pics() as $ap) {
           $p = Pic::find($ap->id);
           $file = $p->path;
           $filename = public_path($file);
           File::delete($filename);
           $p->delete();
         }
       }
       $article->delete();
       return redirect()->route('article.index');
    }

    public function searchResults(Request $request)
    {
        $input = $request->title;
        $codigo = Article::codigoSearch($input)->get();
        $estilo = Article::estiloSearch($input)->get();
        $collection = $codigo->concat($estilo);
        $resultados = $collection->unique()->values()->all();
        //dd($resultados);
        return view('backend.article.search', [
         'input' => $input,
         'resultados' => $resultados
        ]);
    }

    public function articleStock(Request $request,$id)
    {
       $art = Article::find($id);
       $input = $request->all();
       //dd($input);
       $rules = [
        'cantidad' => 'required',
        'talla' => 'required',
        'color' => 'required',
        'color_hex' => 'required',
        'store_id' => 'required|not_in:0'
       ];
       $messages = [
        'cantidad.required' => 'El campo "cantidad" es obligatorio',
        'talla.required' => 'El campo "talla" es obligatorio',
        'color.required' => 'El campo "color" es obligatorio',
        'color_hex.required' => 'El campo "color" es obligatorio',
       ];
       $validator = Validator::make($input, $rules, $messages);
       if ($validator->fails()) {
           //dd($validator);
           return redirect()->back()
          ->withErrors($validator)
          ->withInput();
       } else {
       //dd($input,$art);
       $stock = Stock::create([
        'article_id' => $art->id,
        'cantidad' => $input['cantidad'],
        'talla' => $input['talla'],
        'color' => $input['color'],
        'color_hex' => $input['color_hex'],
        'store_id' => $input['store_id'],
       ]);
       return redirect()->back();
    }
   }

   public function addStock($id)
   {
      $stock = Stock::find($id);
      $stock->cantidad ++;
      $stock->save();
      return redirect()->back();
   }

   public function reduceStock($id)
   {
      $stock = Stock::find($id);
      $stock->cantidad --;
      $stock->save();
      return redirect()->back();
   }

   public function removeStock($id)
   {
      $stock = Stock::find($id);
      $stock->delete();
      return redirect()->back();
   }


}

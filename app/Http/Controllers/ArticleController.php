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
         'articles' => Article::all()
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
        'categories' => Category::all(),
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
           'name' => 'required',
           'description' => 'max:150',
           'family_id' => 'required|not_in:0'

       ];
       $messages = [
        'name.required' => 'El campo nombre es obligatorio',
       ];
       $validator = Validator::make($input, $rules, $messages);
       if ($validator->fails()) {
           //dd($validator);
           return redirect()->back()
          ->withErrors($validator)
          ->withInput();
       } else {
        $slug = str_replace(' ', '-', strtolower($input['name']));
        //dd($slug);
        $art = Article::create([
         'name' => $input['name'],
         'slug' => $slug,
         'description' => $input['description'],
         'code' => $input['code'],
         'family_id' => $input['family_id'],
         'category_id' => $input['category_id']
        ]);
        if ($input['is_trend'] == 'on'){
           $art->is_trend = true ;
        }

        $art->save();
        }
        return redirect()->route('article.show',$art->id)->with('success', 'Información almacenada');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
      return view('backend.article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('backend.article.edit',[
         'article' => $article,
         'categories' => Category::all(),
         'families' => Family::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
       $input = $request->all();
       //dd($input);
       $rules = [
        'name' => 'required',
        'description' => 'max:150'
       ];
       $messages = [

       ];
       $validator = Validator::make($input, $rules, $messages);
       if ($validator->fails()) {
           //dd($validator);
           return redirect()->back()
          ->withErrors($validator)
          ->withInput();
       } else {
        dd($input);
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




}

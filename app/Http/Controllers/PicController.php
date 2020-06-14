<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use App\Pic;
use App\Article;
use Illuminate\Http\Request;
use File;
use Validator;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'photos' => 'required',
            'photos.*' => 'mimes:jpg,jpeg,png,gif|max:500'
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
            $file = Input::file('photos');
            //dd($image);
             $ar= Article::find($request->id);
             $name = str_replace(' ', '', strtolower($ar->name));
             $total =count($file);
             for ($i=0; $i < $total; $i++) {
                $file_name =$name.str_random(6).'.'.$file[$i]->getClientOriginalExtension();
                $pic = new Pic;
                $pic->path = 'article_pictures/'.$file_name;
                $file[$i]->move('article_pictures/', $file_name);
                $pic->article_id = $ar->id;
                $pic->save();
             }

             return redirect()->back()->with('success', 'Imágenes almacenadas');

         }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('todo funciona bien');
      $p = Pic::find($id);
      $file = $p->path;
      $filename = public_path($file);
      File::delete($filename);
      $p->delete();
      return redirect()->back();
    }

    public function delete(Pic $pic)
    {
        $dfile = $pic->path;
        $filename = public_path($dfile);
        File::delete($filename);
        $pic->delete();
        return redirect()->back()->with('success', 'Imagen Eliminada');
    }
}

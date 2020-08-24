<?php

namespace App\Http\Controllers;

use App\Post;
use App\Family;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//Librerias
use Validator;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.post.index', [
            'posts' => Post::paginate(5),
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
        return view('backend.post.create', ['families' => Family::all()]);
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
            'title' => 'required',
            'body' => 'max:10000',
            'family_id' => 'required|not_in:0'
        ];
 
        $messages = [
         'name.required' => 'El campo "Titulo" es obligatorio',
         'body.required' => 'El campo "Cuerpo" es obligatorio.',
         'family_id.not_in' => 'La selección no válida para el campo "Familia"'
        ];
 
        $validator = Validator::make($input, $rules, $messages);
 
        if ($validator->fails()) {
           return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
 
        } else {
 
         $slug = str_replace(' ', '-', strtolower($input['title']));
         //dd($slug);
         $post = Post::create([
          'title' => $input['title'],
          'slug' => $slug,
          'body' => $input['body'],
          'family_id' => $input['family_id'],
          'is_draft' => 0
         ]);

         if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
            $file = Input::file('img_path');
            $file_name =  'post' . $post->id . '.' . $file->getClientOriginalExtension();
            $file->move('post_pictures/', $file_name);
            $post->img_path = 'post_pictures/' . $file_name;
        }
 
         if (array_key_exists('is_draft', $input)){
            $post->is_draft = 1;
         }

 
         $post->save();
 
       }
         return redirect()->route('post.index')->with('success', 'Noticia Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend.post.show', [
            'post' => $post,
            'families' => Family::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backend.post.edit', [
            'post' => $post,
            'families' => Family::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->family_id = $input['family_id'];

        if (array_key_exists('is_draft', $input)){
            $post->is_draft = 1;
         }
         if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
            //Borrar Archivo
            if ($post->img_path != null) {
                $dfile = $post->img_path;
                $filename = public_path($dfile);
                File::delete($filename);
            }
            $file = Input::file('img_path');
            $file_name =  'post' . $post->id . '.' . $file->getClientOriginalExtension();
            $file->move('post_pictures/', $file_name);
            $post->img_path = 'post_pictures/' . $file_name;
        }
        $post->save();
        return redirect()->back()->with('success', 'Noticia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->img_path != null)
        {
          $file = $post->img_path;
          $filename = public_path($file);
          File::delete($filename);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Noticia Eliminada');
    }
}

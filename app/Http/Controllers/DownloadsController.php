<?php

namespace App\Http\Controllers;



//Librerias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Validator;




use App\Download;
use App\Article;

class DownloadsController extends Controller
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
            'files' => 'required',
            'files.*' => 'mimes:pdf'
        ];
        $messages = [
            'files.*.mimes' => 'El archivo no es un PDF'
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
           ->withErrors($validator)
           ->withInput();
        } else {
            $file = Input::file('files');
            //dd($image);
             $ar= Article::find($request->id);
             $total =count($file);
             for ($i=0; $i < $total; $i++) {
                $file_name = str_replace(' ', '-', strtolower($file[$i]->getClientOriginalName()));
                $newFile = Download::create([
                    'path' => 'article_downloads/'.$file_name,
                    'article_id' => $input['id'],
                    'is_video' => false
                ]);

                $file[$i]->move('article_downloads/', $file_name);
             }

             return redirect()->back()->with('success', 'Archivos almacenados');

         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function show(Downloads $downloads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function edit(Downloads $downloads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Downloads $downloads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Downloads $downloads)
    {
        //
    }

    public function delete(Download $download)
    {
        $dfile = $download->path;
        $filename = public_path($dfile);
        File::delete($filename);
        $download->delete();
        return redirect()->back()->with('success', 'Archivo Eliminado');
    }
}

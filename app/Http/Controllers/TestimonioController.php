<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;

use App\Testimonio;


class TestimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonios = Testimonio::all();
        return view('backend.testimonio.index', ['testimonios' => $testimonios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonio.create');
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
        'nombre' => 'required',
        'testimonio' => 'required',
       ];
        $messages = [
        'nombre.required' => 'El campo "Nombre" es obligatorio',
        'testimonio.required' => 'El campo "testimonio" es obligatorio',
     ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        } else {
            $testimonio = Testimonio::create([
                'nombre' => $input['nombre'],
                'testimonio' => $input['testimonio']
            ]);
            return redirect()->route('testimonio.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonio $testimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonio $testimonio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonio $testimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonio $testimonio)
    {
        $testimonio->delete();
        return redirect()->route('testimonio.index');
    }
}

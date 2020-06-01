<?php

namespace App\Http\Controllers;

use App\Store;
use Validator;
use Session;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('backend.store.index', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.store.create');
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
      $store = Store::create([
        'name' => str_replace(' ', '', strtolower($input['name'])),
        'display_name' => ucwords($input['name']),
       ]);
       if ($input['calle'] != null) {
         $store->calle = $input['calle'];
       }
       if ($input['colonia'] != null) {
         $store->colonia = $input['colonia'];
       }
       if ($input['estado'] != null) {
         $store->estado = $input['estado'];
       }
       if ($input['codigo_postal'] != null) {
         $store->codigo_postal = $input['codigo_postal'];
       }
       if ($input['telefono'] != null) {
         $store->telefono = $input['telefono'];
       }
       if ($input['lat'] != null) {
         $store->lat = $input['lat'];
       }
       if ($input['lng'] != null) {
         $store->lng = $input['lng'];
       }
       $store->save();
      return redirect()->route('store.index');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('backend.store.show',['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view('backend.store.edit',['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
      $input = $request->all();
      $rules = [
        'display_name' => 'required',
       ];
      $messages = [
        'display_name.required' => 'El campo "Nombre" es obligatorio',
       ];
      $validator = Validator::make($input, $rules, $messages);
      if ($validator->fails()) {
          //dd($validator);
          return redirect()->back()
      ->withErrors($validator)
      ->withInput();
      } else {
      $store->name = str_replace(' ', '', strtolower($input['display_name']));
      $store->display_name = ucwords($input['display_name']);
       if ($input['calle'] != null) {
         $store->calle = $input['calle'];
       }
       if ($input['colonia'] != null) {
         $store->colonia = $input['colonia'];
       }
       if ($input['estado'] != null) {
         $store->estado = $input['estado'];
       }
       if ($input['codigo_postal'] != null) {
         $store->codigo_postal = $input['codigo_postal'];
       }
       if ($input['telefono'] != null) {
         $store->telefono = $input['telefono'];
       }
       if ($input['lat'] != null) {
         $store->lat = $input['lat'];
       }
       if ($input['lng'] != null) {
         $store->lng = $input['lng'];
       }
       $store->save();
      return redirect()->route('store.index');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
      $store->delete();
      return redirect()->route('store.index');
    }
}

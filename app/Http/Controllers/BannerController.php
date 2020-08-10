<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Family;

use Validator;
use SweetAlert;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.banner.index', [
            'banners' => Banner::all(),
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
        return view('backend.banner.create', ['families' => Family::all() ]);
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
            'family_id' => 'not_in:0',
            'descripcion' => 'max:256',
            'url' => 'url',
            'img_path' => 'image|max:200'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $banner = Banner::create([
                'titulo' => $input['titulo'],
                'url' => $input['url'],
                'descripcion' => $input['descripcion'],
                'family_id' => $input['family_id']
            ]);

            if (array_key_exists('img_path', $input) && $input['img_path'] != null) {
                $file = Input::file('img_path');
                $file_name =  'banner' . $banner->id . '.' . $file->getClientOriginalExtension();
                $file->move('img/brand/', $file_name);
                $banner->img_path = 'img/brand/' . $file_name;
            }
            $banner->save();
            return redirect()->route('banner.index')->with('success','Banner creado');
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
       $b = Banner::find($id);
       $dfile =  $b ->img_path;
       $filename = public_path($dfile);
       File::delete($filename);
       $b->delete();

       return redirect()->route('banner.index')->with('success', 'Banner eliminado');
    }
}

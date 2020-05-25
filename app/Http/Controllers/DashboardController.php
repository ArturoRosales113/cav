<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Charts\pedidosSemanal;

use App\Pedido;
use App\Mensaje;
use App\Cita;

use Storage;
use Validator;
use Session;
use File;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('backend.dashboard.index');
    }

    public function showSettings(Request $request)
    {
        $settings =json_decode(file_get_contents(storage_path().'/app/config/settings.json', true));
        return view('backend.dashboard.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $input = $request->input();
        $finalInput = [
            "logoB"     =>   "",
            "logoN"     =>   "",
            "pixel"     =>   $input['pixel'],
            "google"    =>   $input['google'],
            "keywords"  =>   $input['keywords'],
            "rss"   =>   [
                "facebook"  =>    [
                    "url"   =>    $input['facebook'],
                    "icon"  =>    "fab fa-facebook-square"
                ],
                "twitter"   =>    [
                    "url"   =>    $input['twitter'],
                    "icon"  =>    "fab fa-twitter-square"
                ],
                "instagram"     =>    [
                    "url"   =>    $input['instagram'],
                    "icon"  =>    "fab fa-instagram"
                ],
                "whatsapp"  =>    [
                    "url"   =>    $input['whatsapp'],
                    "icon"  =>    "fab fa-whatsapp"
                ],
                "messenger"     =>    [
                    "url"   =>    $input['messenger'],
                    "icon"  =>    "fab fa-facebook-messenger"
                    ]
                ],
            "direccion"     =>   [
                "calle"     =>    $input['calle'],
                "colonia"   =>    $input['colonia'],
                "estado"    =>    $input['estado'],
                "cp"        =>    $input['cp'],
                "telefono"  =>    $input['telefono'],
                "email"     =>    $input['email'],
                "sucursal"  =>    $input['sucursal']
            ],
            "confirmacionMensaje"   =>  [
                "titulo"    =>   $input['mensajeTitulo'],
                "texto"     =>   $input['mensajeTexto'],
                "textoLink"     =>   $input['mensajeLink'],
                "link"  =>   $input['mensajeTextoLink']
            ],
            "confirmacionCita"  =>   [
                "titulo"    =>   $input['citaTitulo'],
                "texto"     =>   $input['citaTexto'],
                "textoLink" =>   $input['citaLink'],
                "link"      =>   $input['citaTextoLink']
            ],
            "confirmacionNews"  =>   [
                "titulo"    =>   $input['newsTitulo'],
                "texto"     =>   $input['newsTexto'],
                "textoLink" =>   $input['newsLink'],
                "link"      =>   $input['newsTextoLink']
            ],
        ];
        //dd($finalInput);


        File::put(storage_path().'/app/config/settings.json',json_encode($finalInput));

        $request->session()->forget("appSettings");

        // $request->session()->flash('flash_msg', 'Settings have been saved.');

        return redirect()->route('dashboard.index');

    }
    public function showNavSettings(Request $request)
    {
        $nav = json_decode(file_get_contents(storage_path().'/app/config/nav.json', true));
        return view('backend.dashboard.navsettings', compact('nav'));
    }

    public function updateNavSettings(Request $request)
    {
        $input = $request->all();

        // Remove unecessary form fields from input (like _token and _method)
        foreach ($input as $key => $value) {
            if (preg_match("/^_/", $key)) {
                unset($input[$key]);
            }
        }
        $rules = [
            "frame1_link"   =>  'required',
            "frame2_link"   =>  'required',
            "frame3_link"   =>  'required',
            "frame4_link"   =>  'required',
            "frame1_img"    =>  'image|mimes:jpeg,jpg,png|max:500',
            "frame2_img"    =>  'image|mimes:jpeg,jpg,png|max:500',
            "frame3_img"    =>  'image|mimes:jpeg,jpg,png|max:500',
            "frame4_img"    =>  'image|mimes:jpeg,jpg,png|max:500',
        ];
        $messages = [
            '*.size'     =>  'Intenta con menos caracteres',
            '*.required'     =>  'El campo es requerido',
            '*.image'    =>  'El archivo no es una imagen',
            '*.mimes'    =>  'El formato de la imagen no es válido(JPG, JPEG, PNG)',
            '*.max'      =>  'El tamaño del archivo debe ser menor a 500kb',
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            //dd($validator);
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        } else {

            $nav = json_decode(file_get_contents(storage_path().'/app/config/nav.json', true));
            $nav->frame1->title  =   $input['frame1_title'];
            $nav->frame1->text   =   $input['frame1_text'];
            $nav->frame1->link   =   $input['frame1_link'];
            $nav->frame2->title  =   $input['frame2_title'];
            $nav->frame2->text   =   $input['frame2_text'];
            $nav->frame2->link   =   $input['frame2_link'];
            $nav->frame3->title  =   $input['frame3_title'];
            $nav->frame3->text   =   $input['frame3_text'];
            $nav->frame3->link   =   $input['frame3_link'];

            if(Input::file('frame1_img')){

                $file = Input::file('frame1_img');
                $file_name = 'frame1.'.$file->getClientOriginalExtension();
                if (file_exists( public_path() . '/img/dashboard/' . $file_name)) {
                    File::delete(public_path() . '/img/dashboard/' . $file_name);
                }
                $file->move('img/dashboard/', $file_name);
                $nav->frame1->img  =   'img/dashboard/'. $file_name;
            }
            if(Input::file('frame2_img')){

                $file = Input::file('frame2_img');
                $file_name2 = 'frame2.'.$file->getClientOriginalExtension();
                if (file_exists( public_path() . '/img/dashboard/' . $file_name2)) {
                    File::delete(public_path() . '/img/dashboard/' . $file_name2);
                }
                $file->move('img/dashboard/', $file_name2);
                $nav->frame2->img  =   'img/dashboard/'. $file_name2;
            }
            if(Input::file('frame3_img')){

                $file = Input::file('frame3_img');
                $file_name3 = 'frame3.'.$file->getClientOriginalExtension();
                if (file_exists( public_path() . '/img/dashboard/' . $file_name3)) {
                    File::delete(public_path() . '/img/dashboard/' . $file_name3);
                }
                $file->move('img/dashboard/', $file_name3);
                $nav->frame3->img  =   'img/dashboard/'. $file_name3;
            }
            if(Input::file('frame4_img')){

                $file = Input::file('frame4_img');
                $file_name4 = 'frame4.'.$file->getClientOriginalExtension();
                if (file_exists( public_path() . '/img/dashboard/' . $file_name4)) {
                    File::delete(public_path() . '/img/dashboard/' . $file_name4);
                }
                $file->move('img/dashboard/', $file_name4);
                $nav->frame4->img  =   'img/dashboard/'. $file_name4;
            }

            File::put(storage_path().'/app/config/nav.json',json_encode($nav));

            $request->session()->forget("navSettings");

            return redirect()->route('dashboard.index');

            }
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.welcome', [
            'industrial' => Family::find(2)->categories,
            'residencial' => Family::find(1)->categories
            ]);
    }
}

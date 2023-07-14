<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesarrolladoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function desarrolladores(){
        return view('desarrolladores');
    }
}

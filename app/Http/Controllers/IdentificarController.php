<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentificarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function identificar(){
        return view('identificar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JardinerosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function jardineros(){
        return view('jardineros');
    }
}

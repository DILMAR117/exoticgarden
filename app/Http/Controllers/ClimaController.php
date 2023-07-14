<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function clima(){
        return view('clima');
    }
}

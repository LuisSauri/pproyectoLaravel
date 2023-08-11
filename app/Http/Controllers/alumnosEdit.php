<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosEdit extends Controller
{
    public function index(Request $request)
    {
       
        return view('/alumnos');
    }

    
}

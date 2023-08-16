<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clasesEdit extends Controller
{
    public function index(Request $request)
    {
       
        return view('/clases');
    }
}

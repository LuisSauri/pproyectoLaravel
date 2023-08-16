<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clases_instrumentos;
use App\Models\instrumentos;
use App\Models\clases;
use Barryvdh\DomPDF\Facade\Pdf;

class clases_instrumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claseInst=clases_instrumentos::all();
        $instrumentos=instrumentos::all();
        $clases=clases::all();
        

        return view('clases_instrumentos', compact('instrumentos', 'clases', 'claseInst'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_instrumento'=>'required',
            'id_clase'=>'required',
            
        ]);

        $claseInst=new clases_instrumentos();
        $claseInst->id_alumno=$request->input('id_instrumento');
        $claseInst->id_clase=$request->input('id_clase');
        $claseInst->save();
        
        return redirect('/clases_instrumentos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

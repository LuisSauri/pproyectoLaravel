<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\clases;
use App\Models\clases_alumnos;
use Barryvdh\DomPDF\Facade\Pdf;
class clases_alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claseAlumnos=clases_alumnos::all();
        $alumnos=alumnos::all();
        $clases=clases::all();
        

        return view('clases_alumnos', compact('alumnos', 'clases', 'claseAlumnos'));
    }

    public function pdf(){
        $claseAlumnos=clases_alumnos::all();
        $pdf = Pdf::loadView('alumnospdf',compact('claseAlumnos'));
        return $pdf->stream();
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
            'id_alumno'=>'required',
            'id_clase'=>'required',
            
        ]);

        $claseAlumnos=new clases_alumnos();
        $claseAlumnos->id_alumno=$request->input('id_alumno');
        $claseAlumnos->id_clase=$request->input('id_clase');
        $claseAlumnos->save();
        
        return redirect('/clases_alumnos')->with('status', 'Alumno añadido');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clases;
use App\Models\maestros;
use App\Models\clases_maestros;
use Barryvdh\DomPDF\Facade\Pdf;




class clases_maestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claseMaestros=clases_maestros::all();
        $maestros=maestros::all();
        $clases=clases::all();

        return view('clases_maestros', compact('maestros', 'clases', 'claseMaestros'));

    }

    public function pdf(){
        $claseMaestros=clases_maestros::all();
        $pdf = Pdf::loadView('maestrospdf',compact('claseMaestros'));
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
            'id_maestro'=>'required',
            'id_clase'=>'required',
            
        ]);

        $claseMaestros=new clases_maestros();
        $claseMaestros->id_maestro=$request->input('id_maestro');
        $claseMaestros->id_clase=$request->input('id_clase');
        $claseMaestros->save();
        
        return redirect('/clases_maestros');
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

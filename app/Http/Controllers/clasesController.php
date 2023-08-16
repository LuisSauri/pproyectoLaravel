<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\clases;
use Illuminate\Http\Request;

class clasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request['search']?? "";
        if($search !=""){
            $listClases=clases::where('nombre', 'LIKE', "%$search%")->get();
        }else{
            $listClases=clases::all();
        }

            $data=compact('listClases', 'search');

        return view('/clases', compact('listClases'))->with($data);
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
            'nombre'=>'required',
            'dia'=>'required|in:Lunes,Martes,Miércoles,Jueves,Viernes',
            'hora'=>'required|in:14:00,15:00,16:00,17:00,18:00,19:00,20:00',

            
        ]);

        $listClases=new clases();
        $listClases->nombre=$request->input('nombre');
        $listClases->dia=$request->input('dia');
        $listClases->hora=$request->input('hora');


        $listClases->save();

        return redirect('/clases');
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
    public function edit($id)
    {
        $clase = clases::find($id);
                  
        return view('editViews.clasesEdit', ['clase'=>$clase, clases::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required',
            'dia'=>'required|in:Lunes,Martes,Miércoles,Jueves,Viernes',
            'hora'=>'required|in:14:00,15:00,16:00,17:00,18:00,19:00,20:00',

            
        ]);

        $clase=clases::find($id);
        $clase->nombre=$request->input('nombre');
        $clase->dia=$request->input('dia');
        $clase->hora=$request->input('hora');


        $clase->save();

        return redirect('/clases');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clase=clases::find($id);
        
        $clase->delete();

        return redirect('/clases');
    }
}

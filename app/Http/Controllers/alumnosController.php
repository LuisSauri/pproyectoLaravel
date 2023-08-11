<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\clases;
use App\Models\historial_acad;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request['search']??"";
        if($search !=""){
            $listAlumnos=alumnos::where('nombre', 'LIKE', "%$search%")->get();
        }else{
            $listAlumnos=alumnos::all();
        }         
       
            $data=compact('listAlumnos', 'search');
        return view('/alumnos', compact('listAlumnos'))->with($data);
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
            'apellidoPaterno'=>'required',
            'apellidoMaterno'=>'required',
            'fec_nac'=>'required|date',
            'telefono'=>'required',
           
            
        ]);
        $listAlumnos=new alumnos();
        $listAlumnos->nombre=$request->input('nombre');
        $listAlumnos->apellidoPaterno=$request->input('apellidoPaterno');
        $listAlumnos->apellidoMaterno=$request->input('apellidoMaterno');
        $listAlumnos->fec_nac=$request->input('fec_nac');
        $listAlumnos->telefono=$request->input('telefono');
        $listAlumnos->save();
        
        return redirect('/alumnos')->with('status', 'Alumno añadido');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumnoHA = historial_acad::all();
        $alumno= alumnos::find($id);

        return view('alumnosShow', ['alumno'=>$alumno, alumnos::all()], compact('alumnoHA'),('alumnos'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = alumnos::find($id);
                  
        return view('editViews.alumnosEdit', ['alumno'=>$alumno, alumnos::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required',
            'apellidoPaterno'=>'required',
            'apellidoMaterno'=>'required',
            'fec_nac'=>'required|date',
            'telefono'=>'required',
        ]);

        $alumno= alumnos::find($id);
        $alumno->nombre=$request->input('nombre');
        $alumno->apellidoPaterno=$request->input('apellidoPaterno');
        $alumno->apellidoMaterno=$request->input('apellidoMaterno');
        $alumno->fec_nac=$request->input('fec_nac');
        $alumno->telefono=$request->input('telefono');
        $alumno->save();
    
        return redirect('/alumnos');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno=alumnos::find($id);
        
        $alumno->delete();

        return redirect('/alumnos');
    }

    /*
    public function search(Request $request){
        
        $search= $request->search;
        $alumno=alumnos::where(function($query) use ($search){
            $query->where('nombre', 'LIKE', "%$search%");
        })->get();
        
        return view('/alumnos', compact('search'));

    }*/
}

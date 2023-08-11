<?php

namespace App\Http\Controllers;

use App\Models\maestros;
use Illuminate\Http\Request;

class maestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $listMaestros=maestros::all();

        $search=$request['search']??"";
        if($search !=""){
            $listMaestros=maestros::where('nombre', 'LIKE', "%$search%")->get();
        }else{
            $listMaestros=maestros::all();
        }    

        $data=compact('listMaestros', 'search');

        return view('/maestros', compact('listMaestros'))->with($data);
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
            'email'=>'required'
            
        ]);
        
        $listMaestros=new maestros();
        $listMaestros->nombre=$request->input('nombre');
        $listMaestros->apellidoPaterno=$request->input('apellidoPaterno');
        $listMaestros->apellidoMaterno=$request->input('apellidoMaterno');
        $listMaestros->fec_nac=$request->input('fec_nac');
        $listMaestros->telefono=$request->input('telefono');
        $listMaestros->email=$request->input('email');
        $listMaestros->save();
        
        return redirect('/maestros');
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
        $maestro = maestros::find($id);
                  
        return view('editViews.maestrosEdit', ['maestro'=>$maestro, maestros::all()]);
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
            'email'=>'required'
            
        ]);
        
        $maestro= maestros::find($id);
        $maestro->nombre=$request->input('nombre');
        $maestro->apellidoPaterno=$request->input('apellidoPaterno');
        $maestro->apellidoMaterno=$request->input('apellidoMaterno');
        $maestro->fec_nac=$request->input('fec_nac');
        $maestro->telefono=$request->input('telefono');
        $maestro->email=$request->input('email');
        $maestro->save();
        
        return redirect('/maestros');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maestro=maestros::find($id);
        
        $maestro->delete();

        return redirect('/maestros');
    }
}

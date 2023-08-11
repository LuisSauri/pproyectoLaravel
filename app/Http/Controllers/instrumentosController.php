<?php

namespace App\Http\Controllers;

use App\Models\instrumentos;
use Illuminate\Http\Request;

class instrumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $search=$request['search']??"";
        if($search !=""){
            $listInstrumentos=instrumentos::where('nombreInstrumento', 'LIKE', "%$search%")->get();
        }else{
            $listInstrumentos=instrumentos::all();
        }

        $data=compact('listInstrumentos', 'search');

        return view('/instrumentos', compact('listInstrumentos'))->with($data);
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
            'nombreInstrumento'=>'required',
            'marca'=>'required',
            'num_serie'=>'required'
        ]);

        $listIntrumentos=new instrumentos();
        $listIntrumentos->nombreInstrumento=$request->input('nombreInstrumento');
        $listIntrumentos->marca=$request->input('marca');
        $listIntrumentos->num_serie=$request->input('num_serie');
        $listIntrumentos->save();

        return redirect('/instrumentos');

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
        $instrumento = instrumentos::find($id);
                  
        return view('editViews.instrumentosEdit', ['instrumento'=>$instrumento, instrumentos::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreInstrumento'=>'required',
            'marca'=>'required',
            'num_serie'=>'required'
        ]);

        $intrumentos= instrumentos::find($id);
        $intrumentos->nombreInstrumento=$request->input('nombreInstrumento');
        $intrumentos->marca=$request->input('marca');
        $intrumentos->num_serie=$request->input('num_serie');
        $intrumentos->save();

        return redirect('/instrumentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instrumento=instrumentos::find($id);
        
        $instrumento->delete();

        return redirect('/instrumentos');
    }
}

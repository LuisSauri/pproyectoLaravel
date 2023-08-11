@extends('layouts.template')


@section('title', 'Alumnos | Escuela de Música')
    
@section('header')

@endsection

@section('main')

@section('lista', 'Lista de Alumnos')

@section('tabla')

<div class="col-4"> </div>

<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-1"> </div>        

        <div class="table-alum col-10" >
            <h4 class="text-center">Historial Academico</h4>
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark col-xs">
                  <tr>
                    <th scope="col" class="text-center">ID de Alumno</th>
                    <th scope="col" class="text-center">ID de clase</th>
                    <th scope="col" class="text-center">Calificación</th>            
                    <th scope="col" class="text-center">Estatus</th>
                  </tr>
                </thead>

                <tbody>
                   
                    <td class="text-center"> </td>
                    <td class="text-center"> </td>
                    <td class="text-center"> </td>
                    <td class="text-center"> </td>

                 
                </tbody>
            </table>
        </div>    
        <div class="col-1"> </div>   
    </div>

</div>
@endsection


@section('footer')
@endsection

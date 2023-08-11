@extends('layouts.template')


@section('title', 'Clases | Crescendo')
    
@section('header')
@endsection

@section('main')
@section('lista', 'Lista de Clases')

<div >
    <div>

        @if ($errors -> any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                <li>{{ $errors }}</li>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <form action="{{url('clases')}}" method="POST">
        @csrf
        <!-- Form (modal) -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Clase</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required placeholder="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Maestro</label>
                    <input type="text" class="form-control" name="maestro" required placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Alumnos</label>
                    <input type="text" class="form-control" name="alumnos" required placeholder="">
                </div>


                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Instrumentos</label>
                    <input type="integer" class="form-control" name="instrumentos">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Horario</label>
                    <input type="text" class="form-control" name="horario">
                </div>

            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
        </div>
    </form>
    </div>
    </div>

    </div>
    
</div>
    @section('tabla')
    <!--Tabla-->
    <div >
        <div style="text-align: center">
            
            <!--Busqeueda-->

            <form action="{{url('clases')}}" method="GET">
                <div class="input-group mb-3" class="search">
                     <input type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    </div>
               <div>
                
                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </form>
             </div>
             <!-- Boton agregar (modal) -->
             <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
            </div>
             </div>
    
           </div>
    </div>       
<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-1"> </div>
        

        <div class="table-alum col-10" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Horario</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        @foreach ($listClases as $clase)
                        <td class="text-center">{{$clase->id}} </td>
                        <td class="text-center">{{$clase->nombre}} </td>
                        <td class="text-center">{{$clase->id_horario}} </td>
                        <td class="text-center">
                            <a href="{{url('clases/'.$clase->id.'/editViews.clasesEdit')}}" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>

                        </td>
                            
                        <td>   
                                <form action="{{url('clases' .$clase->id)}}" method="POST"> 
                                    <button class="btn btn small btn-danger" onclick="return confirm('{{ __('Apoco si?') }}')">
                                        {{ __() }}<i class="bi bi-trash-fill"></i></button>                                   @method('DELETE')
                                   @csrf
                               </form>
                            
                        </td>
                    </tr>
                        
                    @endforeach

                </tbody>
              </table>
    
        </div>

        <div class="col-1"> </div>

    </div>


</div>
    @endsection
@endsection

@section('footer')
@endsection

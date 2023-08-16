@extends('layouts.template')

@section('title', 'Inventario | Crescendo')
    
@section('header')
@endsection

@section('main')
@section('lista', 'Inventario de Instrumentos')

<div >


    <form action="{{url('instrumentos')}}" method="POST">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Instrumento</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Instumento</label>
                    <input type="text" class="form-control" name="nombreInstrumento" required placeholder="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="marca" required placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Número de Serie</label>
                    <input type="text" class="form-control" name="num_serie" required placeholder="">
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

            <form action="{{url('instrumentos')}}" method="GET">
                <div class="input-group mb-3" class="search">
                     <input type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    </div>
               <div>
                
            </form>
             </div>
             <!-- Boton agregar (modal) -->
             <div>
                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
                <a title="Asignar Clase" href="{{url('clases_instrumentos')}}" class="btn btn small btn-success"><i class="bi bi-music-note-list"></i></i></i></a>                            

            </div>
             </div>
    
           </div>
    </div>       


<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-1"> </div>
        

        <div class="table-alum col-10" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark text-center">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Intrumento</th>
                    <th scope="col" class="text-center">Marca</th>
                    <th scope="col" class="text-center">Número de Serie</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($listInstrumentos as $instrumento)
                    <tr>
                        <td class="text-center">{{$instrumento->id}}</td>
                        <td class="text-center">{{$instrumento->nombreInstrumento}}</td>
                        <td class="text-center">{{$instrumento->marca}}</td>
                        <td class="text-center">{{$instrumento->num_serie}}</td>
                        <td class="text-center">
                            <a href="{{url('instrumentos/'.$instrumento->id.'/editViews.instrumentosEdit')}}" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>

                        </td>
                            
                        <td>   
                                <form action="{{url('instrumentos' .$instrumento->id)}}" method="POST"> 
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
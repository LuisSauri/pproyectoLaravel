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
                    <label for="formGroupExampleInput2" class="form-label">Día</label>
                    <select class="form-select" aria-label="Default select example" name="dia">
                        <option selected disabled>--Selecciona la hora--</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Hora</label>
                    <select class="form-select" aria-label="Default select example" name="hora">
                        <option selected disabled>--Selecciona la hora--</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                      </select>
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
                
                <button title="Buscar" type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </form>
             </div>
             <!-- Boton agregar (modal) -->
             <div>
                <button title="Agregar Clase" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
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
                    <th scope="col" class="text-center">Día</th>
                    <th scope="col" class="text-center">Hora</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>

                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        @foreach ($listClases as $clase)
                        <td class="text-center">{{$clase->id}} </td>
                        <td class="text-center">{{$clase->nombre}} </td>
                        <td class="text-center">{{$clase->dia}} </td>
                        <td class="text-center">{{$clase->hora}} </td>
                        <td class="text-center">
                            <a title="Actualizar" href="{{url('clases/'.$clase->id.'/clasesEdit')}}" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>

                        </td>
                            
                        <td>   
                                <form action="{{url('clases' .$clase->id)}}" method="POST"> 
                                    <button title="Eliminar" class="btn btn small btn-danger" onclick="return confirm('{{ __('Apoco si?') }}')">
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

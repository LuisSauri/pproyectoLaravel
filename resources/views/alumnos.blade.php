@extends('layouts.template')


@section('title', 'Alumnos | Crescendo')
    
@section('header')

@endsection

@section('main')

@section('lista', 'Lista de Alumnos')




    <form action="{{url('alumnos')}}" method="POST">
        @csrf
        <!-- Form (modal) -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required placeholder="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoPaterno" required placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoMaterno" required placeholder="">
                </div>


                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fec_nac" required placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Teléfono</label>
                    <input type="integer" class="form-control" name="telefono" required placeholder="">
                </div>
                

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" />
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

            <form action="{{url('alumnos')}}" method="GET">
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
                <thead class="table table-dark col-xs">
                  <tr>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Apellido Paterno</th>
                    <th scope="col" class="text-center">Apellido Materno</th>
                    <th scope="col" class="text-center">Fecha de nacimiento</th>
                    <th scope="col" class="text-center">Teléfono</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>

                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        @foreach ($listAlumnos as $alumno)
                        <td class="text-center">{{$alumno->nombre}} </td>
                        <td class="text-center">{{$alumno->apellidoPaterno}} </td>
                        <td class="text-center">{{$alumno->apellidoMaterno}} </td>
                        <td class="text-center">{{$alumno->fec_nac}}</td>
                        <td class="text-center">{{$alumno->telefono}} </td>
                        <td class="">
                            <a href="{{url('alumnos/'.$alumno->id.'/alumnosShow')}}" class="btn btn small btn-success"><i class="bi bi-person-vcard"></i></i></a>                            
                        </td>

                        <td class="">
                            <a href="{{url('alumnos/'.$alumno->id.'/editViews.alumnosEdit')}}" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>                            
                        </td>
                            
                        <td>   
                                <form action="{{url('alumnos' .$alumno->id)}}" method="POST"> 
                                    <button class="btn btn small btn-danger" onclick="return confirm('{{ __('Apoco si?') }}')">
                                        {{ __() }}<i class="bi bi-trash-fill"></i></button>
                                   @method('DELETE')
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

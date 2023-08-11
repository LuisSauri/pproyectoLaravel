@extends('layouts.template')


@section('title', 'Actualizar Maestro | Crescendo')
    
@section('header')

@endsection

@section('main')
@section('lista', 'Actualizar datos de Maestro')

    @section('tabla')
        <form action="{{url('maestros/'.$maestro->id)}}" method="POST" enctype="multipart/form-data">  
            @method('PUT')
            @csrf
            <div class="row"> 
                <div class="col-3"> </div>
                <div class="col-6">        
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{$maestro->nombre}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellidoPaterno" value="{{$maestro->apellidoPaterno}}" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellidoMaterno" value="{{$maestro->apellidoMaterno}}" required>
                            </div>
            
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" name="fec_nac" value="{{$maestro->fec_nac}}" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Teléfono</label>
                                <input type="integer" class="form-control" name="telefono" value="{{$maestro->telefono}}" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" value="{{$maestro->email}}" required>
                            </div>

                            <div class="text-center">
                                <a href="{{url('maestros')}}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
                            </div>
            
                </div>
            </div>
            <div class="col-3"> </div>
        </form>
    @endsection

@endsection

     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
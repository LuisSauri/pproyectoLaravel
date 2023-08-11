@extends('layouts.template')


@section('title', 'Actualizar Clase | Crescendo')
    
@section('header')

@endsection

@section('main')
@section('lista', 'Actualizar datos de la Clase')

    @section('tabla')
        <form action="{{url('clases/'.$clase->id)}}" method="POST" enctype="multipart/form-data">  
            @method('PUT')
            @csrf
            <div class="row"> 
                <div class="col-3"> </div>
                <div class="col-6">        
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$clase->nombre}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Maestro</label>
                        <input type="text" class="form-control" name="maestro" value="{{$clase->maestro}}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Alumnos</label>
                        <input type="text" class="form-control" name="alumnos" value="" required>
                    </div>
    
    
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Instrumentos</label>
                        <input type="integer" class="form-control" name="instrumentos">
                    </div>
    
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Horario</label>
                        <input type="text" class="form-control" name="horario">
                    </div>
                        
                        <div class="text-center">
                            <a href="{{url('clases')}}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
                            <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
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
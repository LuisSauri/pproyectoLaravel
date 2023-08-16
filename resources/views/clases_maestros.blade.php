@extends('layouts.template')


@section('title', 'Asingar Maestro')
    
@section('header')

@endsection

@section('main')

@section('lista')
<br>
@endsection

@section('tabla')

<div class="col-4"> </div>

<div class="container-flud px-4 px-lg-5">
    <div class="row">
              

        <div class="col-4" >
            <h4 class="text-center">Asignar Maestro a Clase</h4>
            <form action="{{url('clases_maestros')}}" method="POST" enctype="multipart/form-data">                
                @csrf

                <div class="col-3"> </div>
                
            <div>
                <label for="formGroupExampleInput" class="form-label">Alumno</label>
                <select name="id_maestro" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>--Seleccionar Maestro--</option>
                    @foreach($maestros as $maestro)
                    <option value="{{$maestro->id}}"> {{$maestro->nombre.' '.$maestro->apellidoPaterno.' '.$maestro->apellidoMaterno}} </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="formGroupExampleInput" class="form-label">Clase</label>
                <select name="id_clase" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>--Seleccionar Clase--</option>
                    @foreach($clases as $clase)
                    <option value="{{$clase->id}}"> {{$clase->nombre}} </option>
                    @endforeach
                  </select>
            </div>

            <div class="text-center">
                <a href="{{url('maestros')}}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
            </div>
            </form>



        </div>

        <div class="table-alum col-8" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <div style="text-align: center">
            
                    <!--Busqeueda-->
        
                    <form action="" method="GET">
                        <div class="input-group mb-3" class="search">
                             <input type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                            </div>
                       <div>
                        
                        <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                        <a title="Descargar" href="{{url('maestrospdf')}}" class="btn btn-primary"><i class="bi bi-file-earmark-arrow-down"></i></a>

                    </form>
                     </div>
                     
                <thead class="table table-dark col-xs">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Maestro</th>
                    <th scope="col" class="text-center">Clase</th>
                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                       @foreach($claseMaestros as $item)
                        <td class="text-center">{{$item->id}}</td>
                        <td class="text-center">{{$item->maestro->nombre.' '.$item->maestro->apellidoPaterno.' '.$item->maestro->apellidoMaterno}}</td>
                        <td class="text-center">{{$item->clase->nombre}}</td>                        
                    </tr>
                    @endforeach
                </tbody>
              </table>

    </div> 

        
    </div>

</div>
@endsection


@section('footer')
@endsection

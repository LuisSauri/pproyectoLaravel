<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clases de maestrost</title>
    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 10px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>

</head>
<body>
    <table class="table" style="text-align: center">
        <thead class="text-center">
            <tr>
              <th scope="col" class="text-center">ID</th>
              <th scope="col" class="text-center">Maestro</th>
              <th scope="col" class="text-center">Clase</th>
            </tr>
          </thead>

          <tbody>
            @foreach($claseMaestros as $item)
              <tr>
                  <td class="text-center">{{$item->id}}</td>
                  <td class="text-center">{{$item->maestro->nombre.' '.$item->maestro->apellidoPaterno.' '.$item->maestro->apellidoMaterno}}</td>
                  <td class="text-center">{{$item->clase->nombre}}</td>                        
              </tr>
              @endforeach
          </tbody>
        </table>
</body>
</html>
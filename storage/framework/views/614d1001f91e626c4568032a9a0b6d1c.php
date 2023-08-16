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
            <?php $__currentLoopData = $claseMaestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td class="text-center"><?php echo e($item->id); ?></td>
                  <td class="text-center"><?php echo e($item->maestro->nombre.' '.$item->maestro->apellidoPaterno.' '.$item->maestro->apellidoMaterno); ?></td>
                  <td class="text-center"><?php echo e($item->clase->nombre); ?></td>                        
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
</body>
</html><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/maestrospdf.blade.php ENDPATH**/ ?>
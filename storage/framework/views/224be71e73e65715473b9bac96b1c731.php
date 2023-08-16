


<?php $__env->startSection('title', 'Detalle de Alumno'); ?>
    
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Detalle de Alumno'); ?>


    <?php $__env->startSection('tabla'); ?>
    <div class="container-flud px-4 px-lg-5">
        <div class="row">
            <div class="col-4"> </div>        
    
            <div class="table-alum col-4" >
                <div class="card-body">
                    <h6 class="card-title"><strong>ID:</strong>
                        <?php echo e($alumno->id); ?> <hr>
                   </h6>

                    <h6 class="card-title"><strong>Nombre:</strong>
                         <?php echo e($alumno->nombre); ?> <hr>
                    </h6>

                    <h6 class="card-title"><strong>Apellido Paterno:</strong>
                        <?php echo e($alumno->apellidoPaterno); ?> <hr>
                    </h6>

                    <h6 class="card-title"><strong>Apellido Materno:</strong>
                    <?php echo e($alumno->apellidoMaterno); ?> <hr>
                    </h6>

                    <h6 class="card-title"><strong>Fecha de Nacimiento:</strong>
                        <?php echo e($alumno->fec_nac); ?> <hr>
                    </h6>

                    <h6 class="card-title"><strong>Teléfono:</strong>
                        <?php echo e($alumno->telefono); ?> <hr>
                    </h6>
                </div>
        
            </div>
    
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

            <div class="col-4"> </div>

            <div class="container-flud px-4 px-lg-5">
                <div class="row">
                    <div class="col-1"> </div>        
            
                    <div class="table-alum col-10" >
                        <h4 class="text-center">Historial de Pagos</h4>
                        <table class="table table-hover table-striped table-responsive border m-2">
                            <thead class="table table-dark col-xs">
                              <tr>
                                <th scope="col" class="text-center">Detalle</th>
                                <th scope="col" class="text-center">Cargo</th>
                                <th scope="col" class="text-center">Estatus</th>
                            </tr>
                            </thead>
                           
                            <tbody>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tbody>
                        </table>
                    </div>    
                    <div class="col-1"> </div>   
                </div>
        </div>

          
        
    
    </div>
    
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/alumnosShow.blade.php ENDPATH**/ ?>
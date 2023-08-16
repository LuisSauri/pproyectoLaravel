


<?php $__env->startSection('title', 'Actualizar Maestro | Crescendo'); ?>
    
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Actualizar datos de Maestro'); ?>

    <?php $__env->startSection('tabla'); ?>
        <form action="<?php echo e(url('maestros/'.$maestro->id)); ?>" method="POST" enctype="multipart/form-data">  
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row"> 
                <div class="col-3"> </div>
                <div class="col-6">        
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo e($maestro->nombre); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo e($maestro->apellidoPaterno); ?>" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo e($maestro->apellidoMaterno); ?>" required>
                            </div>
            
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" name="fec_nac" value="<?php echo e($maestro->fec_nac); ?>" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Teléfono</label>
                                <input type="integer" class="form-control" name="telefono" value="<?php echo e($maestro->telefono); ?>" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" value="<?php echo e($maestro->email); ?>" required>
                            </div>

                            <div class="text-center">
                                <a href="<?php echo e(url('maestros')); ?>" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
                            </div>
            
                </div>
            </div>
            <div class="col-3"> </div>
        </form>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/editViews/maestrosEdit.blade.php ENDPATH**/ ?>
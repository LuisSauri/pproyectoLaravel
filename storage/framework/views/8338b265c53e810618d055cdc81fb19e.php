


<?php $__env->startSection('title', 'Actualizar Clase | Crescendo'); ?>
    
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Actualizar datos de la Clase'); ?>

    <?php $__env->startSection('tabla'); ?>
        <form action="<?php echo e(url('clases/'.$clase->id)); ?>" method="POST" enctype="multipart/form-data">  
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row"> 
                <div class="col-3"> </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo e($clase->nombre); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Día</label>
                        <select class="form-select" aria-label="Default select example" name="dia">
                            <option><?php echo e($clase->dia); ?></option>
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
                            <option><?php echo e($clase->hora); ?></option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                          </select>
                        
                        <div class="text-center">
                            <a href="<?php echo e(url('clases')); ?>" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
                            <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/editViews/clasesEdit.blade.php ENDPATH**/ ?>
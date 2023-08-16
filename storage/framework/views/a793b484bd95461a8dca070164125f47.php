


<?php $__env->startSection('title', 'Actualizar Alumno | Escuela de Música'); ?>
    
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Actualizar datos de  Alumno'); ?>

    <?php $__env->startSection('tabla'); ?>
        <div class="container-flud px-4 px-lg-5">  
            <div class="row"> 
                <div class="col-1"> </div>
                <div class="col-10">        
                        <div clas="mb-3">
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
        
                            <div class="col-1"></div>   
                        </div> 
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

            
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views//alumnosEdit.blade.php ENDPATH**/ ?>
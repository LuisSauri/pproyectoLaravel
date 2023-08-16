


<?php $__env->startSection('title', 'Asingar clase'); ?>
    
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<?php $__env->startSection('lista'); ?>
<br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>

<div class="col-4"> </div>

<div class="container-flud px-4 px-lg-5">
    <div class="row">
              

        <div class="col-4" >
            <h4 class="text-center">Asignar Instrumento a clase</h4>
            <form action="<?php echo e(url('clases_instrumentos')); ?>" method="POST" enctype="multipart/form-data">                
                <?php echo csrf_field(); ?>

                <div class="col-3"> </div>
                
            <div>
                <label for="formGroupExampleInput" class="form-label">Instrumento</label>
                <select name="id_alumno" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>--Seleccionar instrumento--</option>
                    <?php $__currentLoopData = $instrumentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrumento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($instrumento->id); ?>"> <?php echo e($instrumento->nombreInstrumento); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div>
                <label for="formGroupExampleInput" class="form-label">Clase</label>
                <select name="id_clase" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>--Seleccionar Clase--</option>
                    <?php $__currentLoopData = $clases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($clase->id); ?>"> <?php echo e($clase->nombre); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
            </div>

            <div class="text-center">
                <a href="<?php echo e(url('instrumentos')); ?>" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
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
                    </form>
                     </div>

                <thead class="table table-dark col-xs">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Instrumento</th>
                    <th scope="col" class="text-center">Clase</th>
                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                       <?php $__currentLoopData = $claseInst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center"><?php echo e($item->id); ?></td>
                        <td class="text-center"><?php echo e($item->instrumento->nombreInstrumento); ?></td>
                        <td class="text-center"><?php echo e($item->clase->nombre); ?></td>                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

    </div> 

        
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/clases_instrumentos.blade.php ENDPATH**/ ?>
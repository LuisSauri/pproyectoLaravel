


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
            <h4 class="text-center">Asignar Clase a Alumno</h4>
            <?php $__currentLoopData = $listAlumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(url('/formClasesAlumnos')); ?>" method="POST" enctype="multipart/form-data">  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>

                <div class="col-3"> </div>
            <div>
                <label for="formGroupExampleInput" class="form-label">Alumno</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>--Seleccionar alumno--</option>
                    <?php $__currentLoopData = $listAlumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($alumno->id); ?>"> <?php echo e($alumno->nombre.' '.$alumno->apellidoPaterno); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div>
                <label for="formGroupExampleInput" class="form-label">Clase</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>--Seleccionar Clase--</option>
                    <?php $__currentLoopData = $listClases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($clase->id); ?>"> <?php echo e($clase->nombre); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
            </div>

            <div class="text-center">
                <a href="<?php echo e(url('alumnos')); ?>" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i></a>
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
                    <th scope="col" class="text-center">Alumno</th>
                    <th scope="col" class="text-center">Clase</th>
                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                       <?php $__currentLoopData = $listAlumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center"></td>
                        <td class="text-center"><?php echo e($clase->alumno); ?></td>
                        <td class="text-center"><?php echo e($clase->clase); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                </tbody>
              </table>

    </div> 

        
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/forms/formClasesAlumnos.blade.php ENDPATH**/ ?>



<?php $__env->startSection('title', 'Clases | Crescendo'); ?>
    
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Lista de Clases'); ?>

<div >
    <div>

        <?php if($errors -> any()): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($errors); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


    <form action="<?php echo e(url('clases')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Form (modal) -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Clase</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required placeholder="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Día</label>
                    <select class="form-select" aria-label="Default select example" name="dia">
                        <option selected disabled>--Selecciona la hora--</option>
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
                        <option selected disabled>--Selecciona la hora--</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                      </select>
                </div>

            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        <button type="submit" class="btn btn-success"><i class="bi bi-person-check-fill"></i></button>
        </div>
    </form>
    </div>
    </div>

    </div>
    
</div>
    <?php $__env->startSection('tabla'); ?>
    <!--Tabla-->
    <div >
        <div style="text-align: center">
            
            <!--Busqeueda-->

            <form action="<?php echo e(url('clases')); ?>" method="GET">
                <div class="input-group mb-3" class="search">
                     <input type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    </div>
               <div>
                
                <button title="Buscar" type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </form>
             </div>
             <!-- Boton agregar (modal) -->
             <div>
                <button title="Agregar Clase" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
            </div>
             </div>
    
           </div>
    </div>       
<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-1"> </div>
        

        <div class="table-alum col-10" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Día</th>
                    <th scope="col" class="text-center">Hora</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>

                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        <?php $__currentLoopData = $listClases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center"><?php echo e($clase->id); ?> </td>
                        <td class="text-center"><?php echo e($clase->nombre); ?> </td>
                        <td class="text-center"><?php echo e($clase->dia); ?> </td>
                        <td class="text-center"><?php echo e($clase->hora); ?> </td>
                        <td class="text-center">
                            <a title="Actualizar" href="<?php echo e(url('clases/'.$clase->id.'/clasesEdit')); ?>" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>

                        </td>
                            
                        <td>   
                                <form action="<?php echo e(url('clases' .$clase->id)); ?>" method="POST"> 
                                    <button title="Eliminar" class="btn btn small btn-danger" onclick="return confirm('<?php echo e(__('Apoco si?')); ?>')">
                                        <?php echo e(__()); ?><i class="bi bi-trash-fill"></i></button>                                   <?php echo method_field('DELETE'); ?>
                                   <?php echo csrf_field(); ?>
                               </form>
                            
                        </td>
                    </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
    
        </div>

        <div class="col-1"> </div>

    </div>


</div>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views//clases.blade.php ENDPATH**/ ?>
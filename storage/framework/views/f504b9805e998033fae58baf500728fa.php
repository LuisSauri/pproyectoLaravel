


<?php $__env->startSection('title', 'Maestros | Crescendo'); ?>
    
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<?php $__env->startSection('lista', 'Lista de Maestros'); ?>

<div >
    <div>

        <?php if($errors -> any()): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>




    <form action="<?php echo e(url('maestros')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Form (modal) -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Maestro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
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
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" required placeholder="example@email.com">
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
    <div style="text-align: center">
            
        <!--Busqeueda-->

        <form action="<?php echo e(url('maestros')); ?>" method="GET">
            <div class="input-group mb-3" class="search">
                 <input title="Buscar" type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                </div>
           <div>
            
            <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            <button title="Añadir Maestro" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
            <a title="Asignar Clase" href="<?php echo e(url('clases_maestros')); ?>" class="btn btn small btn-success"><i class="bi bi-music-note-list"></i></i></i></a>                            

        </form>
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
                    <th scope="col" class="text-center">Apellido Paterno</th>
                    <th scope="col" class="text-center">Apellido Materno</th>
                    <th scope="col" class="text-center">Fecha de nacimiento</th>
                    <th scope="col" class="text-center">Teléfono</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                  </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        <?php $__currentLoopData = $listMaestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center"><?php echo e($maestro->id); ?> </td>
                        <td class="text-center"><?php echo e($maestro->nombre); ?> </td>
                        <td class="text-center"><?php echo e($maestro->apellidoPaterno); ?> </td>
                        <td class="text-center"><?php echo e($maestro->apellidoMaterno); ?> </td>
                        <td class="text-center"><?php echo e($maestro->fec_nac); ?></td>
                        <td class="text-center"><?php echo e($maestro->telefono); ?> </td>
                        <td class="text-center"><?php echo e($maestro->email); ?> </td>
                        <td>
                            <a title="Editar" href="<?php echo e(url('maestros/'.$maestro->id.'/editViews.maestrosEdit')); ?>" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>
                        </td>
                            
                        <td>   
                                <form action="<?php echo e(url('maestros' .$maestro->id)); ?>" method="POST"> 
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views//maestros.blade.php ENDPATH**/ ?>
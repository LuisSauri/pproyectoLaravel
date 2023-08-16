

<?php $__env->startSection('title', 'Maestros | Escuela de Música'); ?>
    
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div >
            
    <div>
        <div style="text-align: center">
            <h1>Lista de Maestros</h1>
         <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar
            </button>
        </div>
    </div>

    <form action="<?php echo e(url('maestros')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Modal -->
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

    <!--Tabla-->
<div class="container-flud">
    <div class="row">
        <div class="col-1"> </div>
        

        <div class="table-alum col-10" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php $__currentLoopData = $listMaestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <td class="text-center"><?php echo e($maestro->id); ?></td>
                        <td class="text-center"><?php echo e($maestro->nombre); ?></td>
                        <td class="text-center"><?php echo e($maestro->apellidoPaterno); ?></td>
                        <td class="text-center"><?php echo e($maestro->apellidoMaterno); ?></td>
                        <td class="text-center"><?php echo e($maestro->fec_nac); ?></td>
                        <td class="text-center"><?php echo e($maestro->telefono); ?></td>
                        <td class="text-center"><?php echo e($maestro->email); ?></td>
                        <td class="text-center">
                             
                            <a href="" class="btn btn-small btn-warning"><i class="bi bi-pen-fill"></i></a>
                            <a href="" class="btn btn small btn-danger"><i class="bi bi-trash-fill"></i></a>
    
                        </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>

                </tbody>
              </table>
    
        </div>

        <div class="col-1"> </div>

    </div>


</div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/maestros.blade.php ENDPATH**/ ?>
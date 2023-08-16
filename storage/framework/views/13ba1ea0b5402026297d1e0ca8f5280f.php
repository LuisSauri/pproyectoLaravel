

<?php $__env->startSection('title', 'Inventario | Crescendo'); ?>
    
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('lista', 'Inventario de Instrumentos'); ?>

<div >


    <form action="<?php echo e(url('instrumentos')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Instrumento</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Instumento</label>
                    <input type="text" class="form-control" name="nombreInstrumento" required placeholder="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="marca" required placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Número de Serie</label>
                    <input type="text" class="form-control" name="num_serie" required placeholder="">
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

            <form action="<?php echo e(url('instrumentos')); ?>" method="GET">
                <div class="input-group mb-3" class="search">
                     <input type="text" name="search" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    </div>
               <div>
                
            </form>
             </div>
             <!-- Boton agregar (modal) -->
             <div>
                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>
                <a title="Asignar Clase" href="<?php echo e(url('clases_instrumentos')); ?>" class="btn btn small btn-success"><i class="bi bi-music-note-list"></i></i></i></a>                            

            </div>
             </div>
    
           </div>
    </div>       


<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-1"> </div>
        

        <div class="table-alum col-10" >
            <table class="table table-hover table-striped table-responsive border m-2">
                <thead class="table table-dark text-center">
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Intrumento</th>
                    <th scope="col" class="text-center">Marca</th>
                    <th scope="col" class="text-center">Número de Serie</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                  </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $listInstrumentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrumento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($instrumento->id); ?></td>
                        <td class="text-center"><?php echo e($instrumento->nombreInstrumento); ?></td>
                        <td class="text-center"><?php echo e($instrumento->marca); ?></td>
                        <td class="text-center"><?php echo e($instrumento->num_serie); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(url('instrumentos/'.$instrumento->id.'/editViews.instrumentosEdit')); ?>" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>

                        </td>
                            
                        <td>   
                                <form action="<?php echo e(url('instrumentos' .$instrumento->id)); ?>" method="POST"> 
                                    <button class="btn btn small btn-danger" onclick="return confirm('<?php echo e(__('Apoco si?')); ?>')">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\escuelaMusica\resources\views//instrumentos.blade.php ENDPATH**/ ?>
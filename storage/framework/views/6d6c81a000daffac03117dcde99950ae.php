<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/img/favicon.png" />
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>


<body class="d-flex flex-column min-vh-100">

    <header>
        <?php echo $__env->yieldContent('header'); ?>
                <!-- Responsive navbar-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container px-5">
                        <a class="navbar-brand" href="<?php echo e(url('home')); ?>">"Crescendo" Escuela Musical</a>
                        <form action="<?php echo e(url('welcome')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <a class="navbar-brand" href="#" onclick="this.closest('form').submit()"><i class="bi bi-box-arrow-left"></i></a>
                        </form>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo e(url('home')); ?>">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('alumnos')); ?>">Alumnos</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('maestros')); ?>">Maestros</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('clases')); ?>">Clases</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('instrumentos')); ?>">Inventario</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
    
    </header>

    <main>

       <?php echo $__env->yieldContent('main'); ?>
       <div></div>
        <h1 class="text-center"><?php echo $__env->yieldContent('lista'); ?></h1></div>
       
        <?php echo $__env->yieldContent('form'); ?>


        <?php echo $__env->yieldContent('tabla'); ?>
       
    
    </main>

    
    <footer class="py-2 bg-dark mt-auto">
        <?php echo $__env->yieldContent('footer'); ?>
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Escuela Música 2023</p></div>
    </footer>


          
</body>
               
</html><?php /**PATH C:\laragon\www\escuelaMusica\resources\views/layouts/template.blade.php ENDPATH**/ ?>
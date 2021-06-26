<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index 1</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"  integrity="" crossorigin="anonymous">
</head>
<body>

	    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="<?php echo e(asset('images/logo.png')); ?>" width="120" alt="" loading="lazy">
            </a>
        </div>
    </nav>
	<!-- <h1>vista inicial</h1> -->


<!-- Contenido -->
<?php echo $__env->yieldContent('content'); ?>

   
  <!-- agrega aquí el footer -->

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com">
                    <img src="<?php echo e(asset('images/facebook.png')); ?>" class="img-fluid" width="40px" alt="facebook">
                </a>
                <a href="https://www.instagram.com">
                    <img src="<?php echo e(asset('images/instagram.png')); ?>" class="img-fluid" width="40px" alt="instagram ">
                </a>
                <a href="https://www.youtube.com">
                    <img src="<?php echo e(asset('images/youtube.png')); ?>" class="img-fluid" width="40px" alt="youtube">
                </a>
                <p class="mt-3">Copyright © 2020 chino, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



</body>
</html><?php /**PATH C:\xampp\htdocs\chinoweb\resources\views/layouts/layout.blade.php ENDPATH**/ ?>
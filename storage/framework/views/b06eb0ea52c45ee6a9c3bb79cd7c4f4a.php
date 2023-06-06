<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel 9 User Roles and Permissions Tutorial')); ?></title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  
  <!-- Favicons -->
  <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<body >

    <div class="wrapper">
        <?php if(auth()->guard()->guest()): ?>

        <?php else: ?>
               <!-- Preloader -->
          <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?php echo e(asset('img/AdminLTELogo.png')); ?>" alt="AdminLTELogo" height="60" width="60">
          </div>

       <?php echo $__env->make('layouts.penal.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('layouts.penal.main_manue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      <?php endif; ?>

      <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </nav>
          </div>
            <?php echo $__env->yieldContent('content'); ?>
            
        </main>
    </div>
</body>
</html>
  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/quill/quill.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('js/main.js')); ?>"></script><?php /**PATH C:\xampp8\htdocs\erps\resources\views/layouts/app.blade.php ENDPATH**/ ?>
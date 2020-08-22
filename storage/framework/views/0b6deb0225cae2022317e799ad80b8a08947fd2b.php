<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Argon Dashboard')); ?></title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('argon')); ?>/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('argon')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo e(asset('argon')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo e(asset('argon')); ?>/css/argon.css?v=1.0.0" rel="stylesheet">
  <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD SUPERA</title>
  <link href=" <?php echo e(asset('argon')); ?>/css/argon.css " rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('argon')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo e(asset('argon')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <style>
    .alert {
      position: relative;
      margin-bottom: 1rem;
      border: 0px solid transparent;
      border-radius: .375rem;
      border: 2px solid transparent;
      max-height: 25px;
      text-align: center;
      padding-top: 1px;
    }

    .alert-danger {
      background-color: red;
    }
  </style>
</head>

<body>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
  </form>
  <?php echo $__env->yieldContent('main'); ?>
  <?php echo $__env->yieldContent('unidade'); ?>
  <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo e(asset('argon')); ?>/js/argon.js" type="text/js"></script>

  <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo e(asset('argon')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <?php echo $__env->yieldPushContent('js'); ?>

  <!-- Argon JS -->
  <script src="<?php echo e(asset('argon')); ?>/js/argon.js?v=1.0.0"></script>
</body>

</html>
<?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/base.blade.php ENDPATH**/ ?>
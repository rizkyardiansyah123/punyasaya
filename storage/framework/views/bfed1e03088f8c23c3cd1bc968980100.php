<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel</title>

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

<div class="container-fluid">

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

    <!-- Menu -->
    <div class="row">
        <div class="col-12">
            <?php echo $__env->make('layouts.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

    <!-- Content -->
    <div class="row mt-3">

        <!-- Main Content -->
        <div class="col-md-8 mb-3">

            <?php if(Session::get('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::get('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>

            <div class="card p-3 shadow-sm">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="col-md-4 mb-3">
            <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

    </div>

    <!-- Footer -->
    <div class="row">
        <div class="col-12">
            <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

</div>

<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/layouts/index.blade.php ENDPATH**/ ?>
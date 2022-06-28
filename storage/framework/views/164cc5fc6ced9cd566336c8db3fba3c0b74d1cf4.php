<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    <title>laravel App - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">Laravel App</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="<?php echo e(route('home.index')); ?>">Home</a>
            <a class="p-2 text-dark" href="<?php echo e(route('home.contact')); ?>">Contacts</a>
            <a class="p-2 text-dark" href="<?php echo e(route('posts.index')); ?>">BlogPost</a>
            <a class="p-2 text-dark" href="<?php echo e(route('posts.create')); ?>">Add to BlogPost</a>
        </nav>
    </div>    
    <div class="container">
        <?php if(session('status')): ?>
        <div class="alert alert-sucess">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
        
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\myproject\resources\views/layouts/app.blade.php ENDPATH**/ ?>
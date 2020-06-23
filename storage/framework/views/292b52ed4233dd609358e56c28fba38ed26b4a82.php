<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8-8"/>
        <title><?php echo $__env->yieldContent('titulo'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('all.css')); ?>">
    </head>
    <body>
    <div class="container">
     <div class="row">   
      <div class="col-md-12">         
        <?php echo $__env->yieldContent('conteudo'); ?>     
        </div>
        </div>
        </div>
        
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jall.min.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\Users\iscre\empresa\resources\views/layout.blade.php ENDPATH**/ ?>
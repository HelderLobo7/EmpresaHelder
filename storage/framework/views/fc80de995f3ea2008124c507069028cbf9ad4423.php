

<?php $__env->startSection('titulo'); ?>
Produtos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>

<h1>Produtos</h1>
<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


Id do Produto:  <?php echo e($produto->id_produto); ?><br>
Produto:  <a href="<?php echo e(route('produtos.show',['id'=>$produto->id_produto])); ?>"> <?php echo e($produto->designacao); ?><br><br></a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><br>
<?php echo e($produtos->render()); ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iscre\empresa\resources\views/produtos/index.blade.php ENDPATH**/ ?>
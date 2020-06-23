

<?php $__env->startSection('titulo'); ?>
Produtos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>


<h2>Detalhes sobre o Produto:    <?php echo e($produto->id_produto); ?><br><br></h2>

Id do Produto:  <?php echo e($produto->id_produto); ?><br><br>
Designação:  <?php echo e($produto->designacao); ?><br><br>
Quantidade:  <?php echo e($produto->qt_stock); ?><br><br>
Preço:  <?php echo e($produto->preco); ?><br><br>
Id Categoria:  <?php echo e($produto->id_categoria); ?><br><br>



<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iscre\empresa\resources\views/produtos/show.blade.php ENDPATH**/ ?>
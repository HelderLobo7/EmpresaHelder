
<?php $__env->startSection('titulo'); ?>
Produtos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>

<form method="post" action="<?php echo e(route('produtos.update',['id'=>$produto->id_produto])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    
    <label>Designacao</label>
    <input type="text" value="<?php echo e($produto->designacao); ?>" name="designacao" required><br>
    <?php if($errors->has('designacao')): ?>
    Verifique se introduziu o designacao corretamente!!
    <?php endif; ?>
    
    
    
    <input type="submit" value="EDITAR" class="btn btn-secondary btn-lg">

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iscre\empresa\resources\views/produtos/edit.blade.php ENDPATH**/ ?>
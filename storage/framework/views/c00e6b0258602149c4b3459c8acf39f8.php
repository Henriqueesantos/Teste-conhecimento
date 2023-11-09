<?php if(session('sucesso')): ?>
<p style="color: green;"><?php echo e(session('sucesso')); ?></p>
<?php endif; ?>

<?php if(session('danger')): ?>
<p style="color: red;"><?php echo e(session('danger')); ?></p>
<?php endif; ?>
<?php /**PATH C:\laravel\new\example-app\resources\views/components/flas-message.blade.php ENDPATH**/ ?>
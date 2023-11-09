<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Listar as maquinas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Listar as maquinas']); ?>


<a href="<?php echo e(route('machines.create')); ?>">Cadastrar pedido de entrega<a>

<h1> Listar os pedidos </h1>



<?php echo $__env->make('components/flas-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>

        </tr>
        </thead>


        <tbody>
            <tr>
<?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $machine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

Usuário:<tr><?php echo e($machine->name); ?></tr><br>Origem:
<tr><?php echo e($machine->endorigem); ?></tr><br>Destino:
<tr><?php echo e($machine->enddestino); ?></tr><br>Valor:
<tr><?php echo e($machine->valor); ?></tr><br><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>


</table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\laravel\new\example-app\resources\views/machines/index.blade.php ENDPATH**/ ?>
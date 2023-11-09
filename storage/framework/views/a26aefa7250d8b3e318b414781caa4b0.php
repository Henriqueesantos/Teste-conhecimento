<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Cadastrar as maquinas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Cadastrar as maquinas']); ?>

<a href="<?php echo e(route('machines.index')); ?>">Listar pedidos</a>


<h1> Cadastrar pedido de entrega:</h1>
<form action="/machines" method="POST">
    <?php echo csrf_field(); ?>
<label>Nome: </label>
<input type="text" name="name" id="name" placeholder=""><br>

<label>Endereço de origem: </label>
<input type="text" name="endorigem" id="endorigem"  placeholder=""><br>

<label>Endereço de entrega: </label>
<input type="text" name="enddestino" id="enddestino" placeholder=""><br><br>

<label>Valor: </label>
<input type="text" name="valor" id="valor" placeholder=""><br><br>


<button type="submit"> Cadastrar</button>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\laravel\new\example-app\resources\views/machines/create.blade.php ENDPATH**/ ?>
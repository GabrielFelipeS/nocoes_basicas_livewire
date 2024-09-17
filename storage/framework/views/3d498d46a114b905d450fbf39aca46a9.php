<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- <?php echo e(asset('css/app.css')); ?> -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div>
      <?php echo e($slot); ?>

    </div>
    <?php if (isset($component)) { $__componentOriginal215564f5141f0ebfe04a4fdbb639549d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215564f5141f0ebfe04a4fdbb639549d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215564f5141f0ebfe04a4fdbb639549d)): ?>
<?php $attributes = $__attributesOriginal215564f5141f0ebfe04a4fdbb639549d; ?>
<?php unset($__attributesOriginal215564f5141f0ebfe04a4fdbb639549d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215564f5141f0ebfe04a4fdbb639549d)): ?>
<?php $component = $__componentOriginal215564f5141f0ebfe04a4fdbb639549d; ?>
<?php unset($__componentOriginal215564f5141f0ebfe04a4fdbb639549d); ?>
<?php endif; ?>

</div>
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/aluno/nocoes_basicas_livewire/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>
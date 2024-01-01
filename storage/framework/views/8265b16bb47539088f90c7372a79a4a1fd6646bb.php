
<!DOCTYPE html>
<html class="loading" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <?php echo $__env->yieldPushContent('meta'); ?>
  <title><?php echo $__env->yieldContent('meta-title', "UFALA"); ?></title>

  <link href="<?php echo e(asset('theme/css/app.css')); ?>" rel="stylesheet">
  <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body <?php echo e($attributes); ?>>
  <?php echo $__env->yieldContent('header'); ?>
  <?php echo $__env->yieldContent('body'); ?>
  <?php echo $__env->yieldContent('footer'); ?>
  <?php echo $__env->yieldPushContent('outer'); ?>
  <script src="<?php echo e(asset('theme/js/vendors.min.js')); ?>"></script>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.out','data' => []]); ?>
<?php $component->withName('out'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
  <script src="<?php echo e(asset('theme/js/extensions/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/summernote/summernote.js')); ?>"></script>

  <script src="<?php echo e(asset('theme/js/pickers/dateTime/moment-with-locales.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/dateTime/bootstrap-datetimepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.date.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.time.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/forms/select/select2.full.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/app-menu.min.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('js'); ?>
  <script src="<?php echo e(asset('theme/js/app.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html><?php /**PATH D:\www\ufala\resources\views/components/layout/simple.blade.php ENDPATH**/ ?>
<?php $attributes = $attributes->exceptProps(['tag'=>'div','out'=>'']); ?>
<?php foreach (array_filter((['tag'=>'div','out'=>'']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
  global $x_item;
  $id = isset($x_item) ? 'x'.count($x_item) :'x0';
  $x_item[$id] =  $out;
?>

<<?php echo e($tag); ?>

  <?php echo e($attributes->merge(['class' => 'x-item'])); ?>

  xitem-id='<?php echo e($id); ?>'></<?php echo e($tag); ?>>
<?php /**PATH D:\www\ufala\resources\views/components/item.blade.php ENDPATH**/ ?>
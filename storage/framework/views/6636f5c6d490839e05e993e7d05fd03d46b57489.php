<?php $attributes = $attributes->exceptProps([
'list',
'value'=>'name',
'key'=>'id',
'choices' => []
]); ?>
<?php foreach (array_filter(([
'list',
'value'=>'name',
'key'=>'id',
'choices' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<select <?php echo e($attributes->merge( ['class' => 'select2 '] )); ?> multiple="multiple">
  <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option <?php echo e(in_array($item->$key,$choices) ? 'selected' : ''); ?> value="<?php echo e($item->$key); ?>"><?php echo e($item->$value); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>
<?php if (! $__env->hasRenderedOnce('34bd8886-8f39-4efb-a5ec-be056d56f8d8')): $__env->markAsRenderedOnce('34bd8886-8f39-4efb-a5ec-be056d56f8d8'); ?>
<?php $__env->startPush('script'); ?>
<script>
  $(".select2").select2();
</script>
<?php $__env->stopPush(); ?>

<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/select/multi.blade.php ENDPATH**/ ?>
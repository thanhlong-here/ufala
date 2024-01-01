<?php $attributes = $attributes->exceptProps([
'selected' => 0,
'prefix' =>null,
'root' => 0,
'title'=> 'Chọn danh mục',
]); ?>
<?php foreach (array_filter(([
'selected' => 0,
'prefix' =>null,
'root' => 0,
'title'=> 'Chọn danh mục',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php

$id = uniqid('select_');
$index = 0;
$selected = empty($selected) ? 0 : $selected;
$query = Category::whereParentId($root);
$query = empty($prefix) ? $query->whereNull('prefix') : $query->wherePrefix($prefix);

?>
<select <?php echo e($attributes); ?>>
 <option value=""><?php echo e(__($title)); ?> </option>
  <?php $__currentLoopData = $query->arrange(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  $name = str_repeat(": :: ", $item->level).$item->name ;
  ?>
  <option <?php echo e(($item->id == $selected) ? 'selected' : ''); ?> value="<?php echo e($item->id); ?>"> <?php echo e($name); ?></option>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH D:\www\ufala\resources\views/components/select/categories.blade.php ENDPATH**/ ?>
<?php $attributes = $attributes->exceptProps([
  'prefix'  =>   null
]); ?>
<?php foreach (array_filter(([
  'prefix'  =>   null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$find = "category_$prefix";
$search = (new App\Classes\Search("category_$prefix"))->get();
$name = empty($search->name) ? '' : $search->name;

?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('search.find',$find)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('search.find',$find)).'']); ?>
  <div class="row">
   
    <div class="col-md-6">
      <label class="text-bold-600"><?php echo e(__('Tìm bằng từ khóa')); ?> : </label>
      <div class="input-group">
        <input type="text" value="<?php echo e($name); ?>" name="name" placeholder="<?php echo e(__('Từ khóa')); ?> ..." class="form-control" />

        <span class="input-group-btn">
          <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> <?php echo e(__('Tìm kiếm')); ?></button>
        </span>
      </div>
    </div>
  </div>
  
  
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/category/search.blade.php ENDPATH**/ ?>
<?php $attributes = $attributes->exceptProps([
'prefix' => 'post',
]); ?>
<?php foreach (array_filter(([
'prefix' => 'post',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$search = (new App\Classes\Search($prefix))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form row','action' => ''.e(route('search.find',$prefix)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form row','action' => ''.e(route('search.find',$prefix)).'']); ?>
  <div class="col-md-4">
    <label class="text-bold-600"><?php echo e(__('Danh mục cần tìm')); ?>: </label>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.multi','data' => ['class' => 'form-control','choices' => $choices,'list' => App\Models\Category::root()->whereNull('prefix')->arrange(),'name' => 'categories[]']]); ?>
<?php $component->withName('select.multi'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','choices' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($choices),'list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(App\Models\Category::root()->whereNull('prefix')->arrange()),'name' => 'categories[]']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
  <div class="col-md-6">
    <label class="text-bold-600"><?php echo e(__('Từ khóa cần tìm')); ?>: </label>
    <div class="input-group">
      <input type="text" value="<?php echo e($name); ?>" name="name" placeholder="<?php echo e(__('Từ khóa')); ?> ..." class="form-control" />

      <span class="input-group-btn">
        <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> <?php echo e(__('Tìm kiếm')); ?></button>
      </span>
    </div>

  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/post/search.blade.php ENDPATH**/ ?>
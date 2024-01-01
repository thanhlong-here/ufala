<?php $attributes = $attributes->exceptProps([
'prefix' => null
]); ?>
<?php foreach (array_filter(([
'prefix' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$find = "product_$prefix";
$search = (new App\Classes\Search($find))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
$list = empty($prefix) ? App\Models\Category::root()->wherePrefix('product')->get() : App\Models\Category::root()->wherePrefix('product_'.$prefix)->get();
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('search.find',$find)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('search.find',$find)).'']); ?>

  <div class="row">
    <label class="text-bold-600 col-md-4"><?php echo e(__('Từ khóa cần tìm')); ?>: </label>
    <label class="text-bold-600 col-md-3"><?php echo e(__('Danh mục')); ?>: </label>
    <label class="text-bold-600 col-md-3"><?php echo e(__('Trạng thái')); ?>: </label>

  </div>

  <div class="row">
    <div class="col-md-4">
      <fieldset class="form-group position-relative has-icon-left">
        <input type="text" value="<?php echo e($name); ?>" name="name" placeholder="<?php echo e(__('Từ khóa')); ?> ..." class="form-control round" />
        <div class="form-control-position">
          <i class="ft-search primary"></i>
        </div>
      </fieldset>
    </div>
    <div class="col-md-3">
    
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.multi','data' => ['class' => 'form-control round','choices' => $choices,'list' => $list,'name' => 'categories[]']]); ?>
<?php $component->withName('select.multi'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control round','choices' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($choices),'list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($list),'name' => 'categories[]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <div class="col-md-3">
   
      <select name="status" class="form-control round">
        <option value=''><?php echo e(__('Tất cả')); ?></option>
        <option value='news'><?php echo e(__('Sản phẩm mới')); ?></option>
        <option value='hot'><?php echo e(__('Sản phẩm hot')); ?></option>
      </select>
    </div>

    <div class="col-md-2">

      <button class="btn round block"> <?php echo e(__('Tìm kiếm')); ?></button>
    </div>


  </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/product/search.blade.php ENDPATH**/ ?>
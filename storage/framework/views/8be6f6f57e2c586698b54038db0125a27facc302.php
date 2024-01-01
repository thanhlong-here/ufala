<?php $attributes = $attributes->exceptProps([
'id'=> 0,
'prefix'=>null,
'action'=>'categories.update',
'title' =>'Chỉnh sửa danh mục',
'category' => new App\Models\Category]); ?>
<?php foreach (array_filter(([
'id'=> 0,
'prefix'=>null,
'action'=>'categories.update',
'title' =>'Chỉnh sửa danh mục',
'category' => new App\Models\Category]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['enctype' => 'multipart/form-data','method' => ''.e($category->id ? 'PUT' :'POST').'','action' => ''.e(route($action,$category)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['enctype' => 'multipart/form-data','method' => ''.e($category->id ? 'PUT' :'POST').'','action' => ''.e(route($action,$category)).'']); ?>
    <input type="hidden" name="parent_id" value="<?php echo e($id); ?>" />
    <input type="hidden" name="prefix" class="form-control" value="<?php echo e($prefix); ?>" />

    <div class="modal-header">
        <div class="pull-left">
            <ul class="nav navbar-nav">

                <li class="nav-item">

                    <button type="button" data-dismiss="modal" class="black close"> <i class="ft-arrow-left"></i></button>
                </li>
                <li class="nav-item">
                    <h4><?php echo e($title); ?> </h4>
                </li>
            </ul>
        </div>

        <div class="pull-right">

            <button type="submit" class="btn btn-primary"><?php echo e(__('Cập nhật')); ?></button>
            <button type="reset" class="btn grey btn-outline-secondary"><?php echo e(__('Làm lại')); ?></button>
        </div>
    </div>
    <div class="modal-body">
        <div class="card-block">

            <div class="row">
                <div class="col-xs-5 box">
                    <?php if(empty($category->avatar)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php else: ?>
                    <?php echo e($category->avatar->src); ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e(asset($category->avatar->src)).'','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e(asset($category->avatar->src)).'','style' => 'height:120px']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-7">

                    <div class="form-group">

                        <div class="input-group ">
                            <span class="input-group-addon"><?php echo e(__('Tên danh mục')); ?></span>
                            <input type="text" value="<?php echo e($category->name); ?>" placeholder="<?php echo e(__('Tên danh mục')); ?>" class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon"><?php echo e(__('Mã danh mục')); ?> :</span>
                            <input type="text" placeholder="<?php echo e(__('Mã danh mục')); ?>" value="<?php echo e($category->code); ?>" class="form-control" name="code" id="code" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon"><?php echo e(__('Mức độ ưu tiên')); ?></span>
                            <input type="number" name="priority" placeholder="<?php echo e(__('Mức độ ưu tiên')); ?>" class="form-control" value="<?php echo e(empty($category->priority) ? 0 : $category->priority); ?>">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="description" name="description" id="description"><?php echo e($category->description); ?></textarea>
            </div>
        </div>
    </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/category/edit.blade.php ENDPATH**/ ?>
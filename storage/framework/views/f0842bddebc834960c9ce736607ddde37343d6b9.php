<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-header row mb-1']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-header row mb-1']); ?>
        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">

                <?php echo e(__("Danh sách sản phẩm liên kết")); ?>

            </h3>
        </div>
        <div class="content-header-right col-md-6">
            <div class="pull-right">


                <button data-src="<?php echo e($xlink->categories); ?>" class="widget btn mr-1">
                    <i class="ft-grid"> </i>

                    <?php echo e(__('Nhóm sản phẩm')); ?>

                </button>
                <button data-src="<?php echo e($xlink->supplier); ?>" class="widget btn btn-info mr-1">
                    <i class="ft-briefcase"> </i>

                    <?php echo e(__('Nhà cung cấp')); ?>

                </button>
                <button data-src="<?php echo e($xlink->create); ?>" class="widget btn  btn-primary">
                    <i class="ft-plus"> </i>

                    <?php echo e(__('Thêm sản phẩm')); ?>

                </button>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-body']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-body']); ?>
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.search','data' => []]); ?>
<?php $component->withName('product.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>

                <div id="table" class="table-responsive  table-choice">
                    <table class="table">
                        <thead>
                            <th style="width:1rem">

                            </th>
                            <th style="width:1rem">

                            </th>
                            <th>
                                <?php echo e(__('Tên sản phẩm')); ?>

                            </th>



                            <th style="width:8rem">
                                <?php echo e(__('Đơn giá')); ?>

                            </th>
                            <th style="width:8rem">

                                <?php echo e(__('Thưởng CTV')); ?>

                            </th>

                            <th>
                                <span class="float-xs-right">

                                    <?php echo e(__('Trạng thái')); ?>

                                </span>
                            </th>

                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <button data-toggle="modal" data-action="<?php echo e(route('products.destroy',$row)); ?>" data-target="#modal-confirm" class="act-form btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
                                </td>
                                <td>

                                    <button data-src="<?php echo e(route('dropships.edit',$row)); ?>" class="widget btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
                                </td>
                                <td>

                                    <div class="mb-2 font-medium-1 text-bold-600">
                                        <?php echo e($row->name); ?>

                                    </div>
                                    <div class="mb-1">

                                        <span class="font-medium-2">
                                            #<?php echo e($row->category->name); ?>

                                        </span>
                                    </div>
                                    <?php if($row->supplier): ?>
                                    <div class="mb-1">
                                        <span class="font-medium-2 text-bold-600">
                                            <?php echo e(__('Nhà cung cấp')); ?> :
                                        </span>
                                        <span class="font-medium-2">

                                            <?php echo e($row->supplier->name ?? ''); ?>

                                        </span>
                                    </div>
                                    <?php endif; ?>
                                </td>


                                <td> <?php echo e(number_format($row->price)); ?> đ</td>
                                <td class="text-xs-center">
                                    <?php echo e($row->dropship_bonus); ?> %
                                </td>

                                <td class="font-medium-1 text-bold-600">
                                    <span class="float-xs-right">

                                        <?php echo e($row->status); ?>

                                    </span>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>

                    <div class="pull-right">
                        <?php echo e($list->render()); ?>


                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-xl mt-0','id' => 'widget']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-xl mt-0','id' => 'widget']); ?>

    <iframe src="about:blank" loading="lazy" />
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-confirm']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-confirm']); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'DELETE']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'DELETE']); ?>
        <div class="card">
            <div class="card-block">
                <h4 class="pull-left">
                    <?php echo e(__('Dữ liệu sẽ bị mất!')); ?>

                </h4>
                <div class="pull-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Quay lại')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Chấp nhận')); ?></button>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.admin','data' => []]); ?>
<?php $component->withName('layout.admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/dropship/index.blade.php ENDPATH**/ ?>
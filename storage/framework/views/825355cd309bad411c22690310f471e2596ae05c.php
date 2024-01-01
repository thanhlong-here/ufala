<?php $__env->startPush('css'); ?>
<style>
    .select2-selection {
        border-radius: 1.5rem !important;
    }

    .drop-avatar {
        width: 80px;
        height: 80px;
        float: left;
    }
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid']); ?>

    <div class="card card-round shadow">
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

            <div id="table" class="table-responsive">
                <table class="table">
                    <thead>

                        <th>
                            <?php echo e(__('Tên sản phẩm')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Trạng thái')); ?>

                        </th>


                        <th>
                            <?php echo e(__('Loại sản phẩm')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Giá sản phẩm')); ?>

                        </th>

                        <th>

                            <?php echo e(__('Hoa hồng')); ?>

                        </th>


                        <th>

                        </th>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td>
                                <div class="drop-avatar">
                                    <?php if($row->avatar): ?>

                                    <img class="img-fluid" src="<?php echo e(asset($row->avatar->path)); ?>" />
                                    <?php endif; ?>
                                </div>

                                <p class="text-bold-600">
                                    <?php echo e($row->name); ?>

                                </p>


                            </td>
                            <td> <?php echo e($row->status); ?></td>

                            <td>
                                <?php echo e($row->category->name); ?>

                            </td>
                            <td>
                                <?php echo e(number_format($row->price)); ?> đ
                            </td>
                            <td>
                                <?php echo e($row->dropship_bonus); ?> %
                            </td>


                            <td>
                                <button data-src="<?php echo e(route('dropship.sharelink',$row)); ?>" class="btn btn-success widget round block"> <?php echo e(__('Lấy link')); ?> </button>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'widget']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'widget']); ?>
    <iframe src="about:blank" style="height:0px" loading="lazy" />
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.drop','data' => []]); ?>
<?php $component->withName('layout.drop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/index.blade.php ENDPATH**/ ?>
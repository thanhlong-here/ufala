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


        <?php $__env->startPush('outer'); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'products.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'products.destroy']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php $__env->stopPush(); ?>
        <tr>
            <td>
                <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
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
<?php /**PATH D:\www\ufala\resources\views/admin/dropship/table.blade.php ENDPATH**/ ?>
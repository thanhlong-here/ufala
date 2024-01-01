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

                <?php echo e(__("Đơn hàng dropship")); ?>


            </h3>
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
        <div class="card shadow">
            <div class="card-block">

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>
                         
                            <th><?php echo e(__('Thời gian')); ?></th>
                            <th>
                                <?php echo e(__('Thông tin đơn hàng')); ?>

                            </th>
                            <th>
                                <?php echo e(__('Thông tin liên hệ')); ?>

                            </th>

                            <th>
                                <?php echo e(__('Khu vực')); ?>

                            </th>



                            <th>
                                <?php echo e(__('Hoa hồng')); ?>

                            </th>
                            <th class="text-xs-right">

                                <?php echo e(__('Trạng thái')); ?>

                            </th>
                          

                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $sold = $row->item->product;
                            $bonus= $sold->dropship_bonus;
                            $customer = $row->customer;
                            $at =$row->created_at;
                            ?>
                            <tr>
                            
                                <td>
                                    <p class="text-bold-600">
                                        <?php echo e($at->format('d-m-Y')); ?>

                                    <p>
                                    <p class="font-small-3"> Lúc :
                                        <?php echo e($at->format('h:i:s')); ?>

                                    </p>
                                </td>
                                <td>


                                    <p class="text-bold-600">#<?php echo e($row->prefix); ?>-<?php echo e($row->id); ?></p>
                                    <p><label> Giá trị : </label> <span class="text-bold-600"> <?php echo e(number_format($row->total)); ?> đ </span></p>


                                </td>
                                <td>
                                    <p class="text-bold-600"><?php echo e($customer->name ?? ''); ?> </p>
                                    <p> <label> <?php echo e(__('Di động ')); ?> :</label>
                                        <span class="text-bold-700">
                                            <?php echo e($customer->phone_number ?? ''); ?>

                                        </span>
                                    </p>
                                    <p> <label> Email :</label> <?php echo e($customer->email ?? ''); ?> </p>

                                </td>
                                <td>
                                    <?php echo e($row->customer->city->name); ?>

                                </td>

                                <td class="text-bold-600">
                                    <?php echo e($bonus); ?> %
                                </td>

                                <td class="text-xs-right text-bold-600">
                                    <?php echo e(config('order.status')[$row->status]); ?>

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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/order/index.blade.php ENDPATH**/ ?>
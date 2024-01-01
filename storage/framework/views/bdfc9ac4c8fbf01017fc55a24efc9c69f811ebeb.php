<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-body']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-body']); ?>
        <div class="row">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title"> <?php echo e(__('Yêu cầu rút tiền')); ?> </h4>    

                    </div>
                    <div class="card-block">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('dropship.withdraw')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('dropship.withdraw')).'']); ?>
                            <div class="form-group">
                              <input class="form-control" name="total" type="number" placeholder="<?php echo e(__('Số tiền cần rút')); ?> " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control" name="bank_acc" type="text" placeholder="<?php echo e(__('Số tài khoản')); ?> " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control"  name="bank_owner" type="text" placeholder="<?php echo e(__('Chủ tài khoản')); ?> " />      
                            </div>
                            <div class="form-group">
                              <input class="form-control"  name="bank_name" type="text" placeholder="<?php echo e(__('Ngân hàng')); ?> " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control"  name="bank_branch" type="text" placeholder="<?php echo e(__('Chi nhánh ngân hàng')); ?> " />      
                            </div>

                            <div class="form-group">
                              <button class="btn btn-primary block round"><?php echo e(__("Gửi yêu cầu")); ?></button>   
                            </div>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    </div>
                </div>

            </div>
            
            <div class="col-md-7">

                <div class="card shadow">
                    <div class="card-header"> <h4 class="card-title"> <?php echo e(__("Lịch sử giao dịch")); ?></h4> </div>
                    <div class="card-block">

                        <table class="table">
                       
                            <tbody>

                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td>
                                        <?php echo e($row->note); ?>

                                    </td>
                                    <td class="text-xs-right" style="width:12rem">
                                        <p class="font-small-3">
                                        <?php echo e($row->created_at->format('h:i:s')); ?> - <?php echo e($row->created_at->format('d-m-Y')); ?>

                                        <p>
                                        <p class="text-bold-700"> 
                                            <?php echo $row->in ? "<span class='primary'> + $row->in </span>"  : "<span class='danger'>  - $row->out </span>"; ?>

                                        </p>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/transaction.blade.php ENDPATH**/ ?>
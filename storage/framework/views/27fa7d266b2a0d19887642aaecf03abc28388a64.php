<?php $__env->startSection('body'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
  <nav class="navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <h4 class="content-header">
        Mã đơn hàng :
        <span class="text-bold-600"> #<?php echo e($dropship_order->prefix); ?>-<?php echo e($dropship_order->id); ?></span>
      </h4>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>


    </div>

  </nav>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('dropship-orders.update',$dropship_order)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('dropship-orders.update',$dropship_order)).'']); ?>


    <div class="pt-2 container">
      <div class="row">
        <div class="col-xs-7">
          <div class="card shadow">
            <div class="card-block">

              <table class="table">
                <thead>
                  <th> <?php echo e(__('Tên sản phẩm')); ?></th>

                  <th> </th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $dropship_order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sold): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <p class="text-justify"> <?php echo e($sold->product->name); ?> </p>
                      <p> <?php echo e(__('Đơn giá')); ?> : <span class="text-bold-700 "> <?php echo e($sold->product->price_format); ?> đ </span></p>
                    </td>

                    <td> X <span class="text-bold-700 "> <?php echo e($sold->quantity); ?> </span></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <div class="text-xs-right">

                <label class="mr-2"> Giá trị đơn hàng : <span class="text-bold-600"> <?php echo e(number_format($dropship_order->total)); ?> đ </span> </label>
                <?php if($sold->product->dropship_bonus): ?>
                <label class="mr-2"> Thưởng CTV : <span class="text-bold-600"> <?php echo e($sold->product->dropship_bonus); ?> % </span> </label>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xs-5">
          <div class="card shadow">

            <div class="card-block">
              <div class="row">
                <label class="col-xs-4"><?php echo e(__('Tên khách hàng')); ?>:</label>
                <span class="text-bold-600"> <?php echo e($dropship_order->customer->name ?? ''); ?> </span>
              </div>
              <div class="row">
                <label class="col-xs-4"><?php echo e(__('Số di động')); ?>:</label>
                <span class="text-bold-600"> <?php echo e($dropship_order->customer->phone_number ?? ''); ?></span>
              </div>

              <div class="row">
                <label class="col-xs-4"><?php echo e(__('Địa chỉ')); ?>:</label>
                <span class="text-bold-600"><?php echo e($dropship_order->customer->address ?? ''); ?></span>
              </div>
              <div class="row">
                <label class="col-xs-4"><?php echo e(__('Khu vực')); ?>:</label>
                <span class="text-bold-600"><?php echo e($dropship_order->customer->city->name ?? ''); ?></span>
              </div>
              <div class="font-medium-2">
                <?php echo e($dropship_order->content ?? ''); ?>

              </div>

            </div>
            <div class="card-block">
              <div class="row">
                <label class="col-xs-5"> <?php echo e(__('Hình thức thanh toán')); ?> : </label>
                <span class="text-bold-600">
                  <?php echo e($dropship_order->payment ?? ''); ?>

                </span>
              </div>
            </div>
            <div class="card-footer">
              <?php if($dropship_order->status =='finished'): ?>
              <label class="font-medium-2 pull-right"> <?php echo e(__('Trạng thái')); ?> : <span class="text-bold-600"> <?php echo e(config("order.status")[$dropship_order->status]); ?> </span></label>

              <?php else: ?>
              <div class="row">

                <div class="col-xs-8">

                  <fieldset>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <?php echo e(__('Trạng thái')); ?> :
                      </span>
                      <select name="status" class="form-control">
                        <?php $__currentLoopData = config("order.status"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($dropship_order->status == $opt ? 'selected' :'' )); ?> value="<?php echo e($opt); ?>"><?php echo e(__($name)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </fieldset>


                </div>
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary block"><?php echo e(__('Cập nhật')); ?></button>

                </div>
              </div>
              <?php endif; ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/dropship/order/edit.blade.php ENDPATH**/ ?>
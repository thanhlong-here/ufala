<?php $__env->startSection('body'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav step">


        <li class="nav-item">
          <span class="circle"> 1 </span> <?php echo e(__("Thông tin đơn hàng")); ?>

        </li>

        <li class="nav-item ">

          <span class="circle"> 2 </span>
          <?php echo e(__("Thông tin liên hệ")); ?>

        </li>
        <li class="nav-item active ">

          <span class="circle"> 3 </span> <?php echo e(__("Đặt hàng")); ?>

        </li>


      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>

  <div class="container p-2">

    <div class="content-header text-xs-center">
      <h4> <?php echo e(__('Cám ơn bạn đã đặt hàng')); ?> </h4>
      <p> <?php echo e(__('Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất')); ?> </p>
    </div>
    <div class="content-body">


      <div class="form-body">
        <div class="card">
          <div class="card-header">
            <div class="card-title"> <?php echo e(__('Thông tin đơn hàng')); ?> </div>
          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="row">
                <label class="col-xs-6"><?php echo e(__('Mã đơn')); ?> :</label>
                <span class="text-bold-700 "><?php echo e($order->prefix."-".$order->id); ?></span>
              </div>
              <div class="row">
                <label class="col-xs-6"><?php echo e(__('Tổng đơn')); ?> :</label>
                <span class="text-bold-700 "><?php echo e($total); ?></span>
              </div>
              <div class="row">
                <label class="col-xs-6"><?php echo e(__('Hình thức thanh toán')); ?> :</label>
                <span class="text-bold-700 "><?php echo e($order->payment); ?></span>
              </div>
            </div>
            <div class="card-block">

              <table class="table">
                <thead>
                  <th> <?php echo e(__('Tên sản phẩm')); ?></th>

                  <th> <?php echo e(__('Số lượng')); ?></th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <p class="text-justify"> <?php echo e($item->product->name); ?> </p>
                      <p> <?php echo e(__('Đơn giá')); ?> : <span class="text-bold-700 "> <?php echo e($item->product->price_format); ?> đ </span></p>
                    </td>

                    <td> <span class="text-bold-700 "> <?php echo e($item->quantity); ?> </span></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </div>



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

<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['class' => 'fixed-navbar']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'fixed-navbar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/web/dropship/end.blade.php ENDPATH**/ ?>
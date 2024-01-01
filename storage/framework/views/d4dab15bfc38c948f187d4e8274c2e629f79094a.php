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

          <span class="circle  active "> 2 </span>
          <?php echo e(__("Thông tin liên hệ")); ?>

        </li>
        <li class="nav-item">

          <span class="circle"> 3 </span> <?php echo e(__("Đặt hàng")); ?>

        </li>


      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>
  <div class="container p-2">

    <div class="content-body">

      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','method' => 'post','action' => ''.e(route('dropship.order.submit',$short->short)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','method' => 'post','action' => ''.e(route('dropship.order.submit',$short->short)).'']); ?>
        <div class="form-body">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> <?php echo e(__('Thông tin liên hệ')); ?> </div>
            </div>
            <div class="card-block row">
              <div class="col-md-6">

                <div class="form-group">

                  <input class="form-control" required placeholder="<?php echo e(__('Tên liên hệ ')); ?>" name="name" value="<?php echo e(old('name')); ?>" />
                </div>

                <div class="form-group">

                  <input class="form-control" required placeholder="<?php echo e(__('Số điện thoại ( Bắt buộc) ')); ?>" type="number" name="phone_number" value="<?php echo e(old('phone_number')); ?>" />
                </div>

                <div class="form-group">

                  <input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" />
                </div>
                <div class="form-group">
                  <select class="form-control" required name="city_id">

                    <option value="">-- <?php echo e(__('Chọn khu vực')); ?> --</option>
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">

                  <input class="form-control" placeholder="<?php echo e(__('Địa chỉ')); ?>" name="address" value="<?php echo e(old('address')); ?>" />
                </div>



              </div>
              <div class="col-md-6 font-medium-3">


                <div class="card-body mb-2">
                  <h3 class="card-title"> <?php echo e(__('Hình thức thanh toán')); ?> </h3>
                  <div class="form-group">
                    Thanh toán khi giao hàng ( COD)
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="content" rows="3" placeholder="<?php echo e(__('Ghi chú')); ?>" class="form-control"><?php echo e(old('content')); ?></textarea>
                </div>

                <div class="card-footer">
                  <div class="row">
                    <label> Tổng thanh toán : <span class="text-bold-700 "> <?php echo e($total); ?> </span></label>

                    <button class="btn btn-primary block"> <?php echo e(__("Đặt hàng ngay")); ?> </button>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/web/dropship/order.blade.php ENDPATH**/ ?>
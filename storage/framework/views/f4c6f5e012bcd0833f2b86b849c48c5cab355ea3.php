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


        <li class="nav-item active ">
          <span class="circle"> 1 </span> <?php echo e(__("Thông tin đơn hàng")); ?>

        </li>

        <li class="nav-item ">

          <span class="circle"> 2 </span>
          <?php echo e(__("Thông tin liên hệ")); ?>

        </li>
        <li class="nav-item ">

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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form']); ?>
        <div class="form-body">

          <div class="card">
            <div class="card-header">
              <div class="card-title"> <?php echo e(__('Thông tin đặt hàng')); ?> </div>
            </div>
            <div class="card-block">
              <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dropship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                <div class="col-md-3">

                </div>

                <div class="col-md-9">
                  <div class="mb-2">

                    <h4 class="text-justify"> <?php echo e($dropship->item->name); ?> </h4>

                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div style="margin-top: .5rem;" class="font-medium-3">
                        <label> <?php echo e(__('Giá bán')); ?> : </label>
                        <span class="text-bold-700 "> <?php echo e($dropship->item->price_format); ?> đ </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div style="margin-top: .5rem;" class="font-medium-3 col-md-6">
                          <label> <?php echo e(__('Số lượng')); ?> : </label>
                        </div>
                        <div class="col-md-6">
                          <input type="number" value="<?php echo e($dropship->quantity); ?>" name="qty" class="form-control text-xs-center" />

                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="card-footer font-medium-3">
              <div class="offset-md-6 col-md-6">
                <div class="clearfix">
                  <label class="pull-right"> Tạm tính : <span class="text-bold-700 "> <?php echo e($total); ?> </span></label>
                </div>

                <a href="<?php echo e(route('dropship.order',$short->short)); ?>" class="block btn btn-primary"><?php echo e(__('Tiếp tục')); ?></a>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/web/dropship/cart.blade.php ENDPATH**/ ?>
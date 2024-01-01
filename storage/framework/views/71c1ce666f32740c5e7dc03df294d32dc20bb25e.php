<?php $__env->startSection('body'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <h4> <?php echo e(__('Chọn thành phần liên kết')); ?> </h4>
    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>
  <div class="pt-2 container">
    <?php if(auth()->guard()->check()): ?>
    <div class="card">
      <div class="card-header">
        <label class="card-title" for="outerlink">Liên kết Dropship :</label>
      </div>
      <div class="card-body">
        <div class="card-block">
          <div id="table" class="table-responsive">
            <table class="table table-choice">
              <thead>

                <th>
                  <?php echo e(__('Tên sản phẩm')); ?>

                </th>


                <th style="width:8rem">
                  <?php echo e(__('Đơn giá')); ?>

                </th>

                <th style="width:8rem">

                  <?php echo e(__('Hoa hồng')); ?>

                </th>


                <th>

                </th>
              </thead>
              <tbody>

                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                  <td>

                    <div class="mb-2">
                      <label class="font-medium-2 text-bold-600"><?php echo e($row->name); ?></label>

                    </div>
                    <div class="mb-1">

                      <span class="font-medium-2">
                        #<?php echo e($row->category->name); ?>

                      </span>
                    </div>

                  </td>


                  <td> <?php echo e(number_format($row->price)); ?> đ</td>

                  <td>
                    <?php echo e($row->dropship_bonus); ?> %
                  </td>


                  <td>
                    <button class="seleted-link btn  block"> <?php echo e(__('Lấy link')); ?>  <i class="ft-arrow-right"></i> </button>
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


    <div class="card">
      <div class="card-header">
        <label class="card-title" for="outerlink">Link liên kết :</label>
      </div>
      <div class="card-body">
        <div class="card-block">
          <div class="row">
            <div class="col-md-10">
              <fieldset class="form-group position-relative has-icon-left">
                <input id="outerlink" type="text" name="link" class="input-link form-control form-control-lg input-lg" placeholder="<?php echo e(__('Chèn link liên kết')); ?>">
                <div class="form-control-position">
                  <i class="ft-globe info font-medium-4"></i>
                </div>
              </fieldset>
            </div>

            <div class="col-md-2">
              <button class="parent-add-link btn btn-primary block"><?php echo e(__("Thêm link liên kết")); ?> <i class="ft-arrow-right"></i></button>
            </div>

          </div>

        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="card">
      <div class="card-header">
        <label class="card-title" for="outerlink">Link liên kết :</label>
      </div>
      <div class="card-body">
        <div class="card-block">
          <div class="row">
            <div class="col-md-10">
              <fieldset class="form-group position-relative has-icon-left">
                <input id="outerlink" type="text" name="link" class="input-link form-control form-control-lg input-lg" placeholder="<?php echo e(__('Chèn link liên kết')); ?>">
                <div class="form-control-position">
                  <i class="ft-globe info font-medium-4"></i>
                </div>
              </fieldset>
            </div>

            <div class="col-md-2">
              <button class="parent-add-link btn btn-primary block"><?php echo e(__("Thêm link liên kết")); ?> <i class="ft-arrow-right"></i></button>
            </div>

          </div>

        </div>
      </div>
    </div>

    <?php endif; ?>

  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
  $(".parent-add-link").click(function() {
    input = $('.input-link').val();
    parent.lala(input);
  });
</script>
<?php $__env->stopPush(); ?>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/web/landing/widget/links.blade.php ENDPATH**/ ?>
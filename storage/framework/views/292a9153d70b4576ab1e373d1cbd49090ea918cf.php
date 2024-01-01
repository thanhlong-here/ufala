<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container p-2']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container p-2']); ?>
  <div class="content-header text-xs-center mb-2">
    <h2><?php echo e($dropship->name); ?></h2>
  </div>
  <div class="content-body">

    <div class="offset-md-2 col-md-8">
      <div class="row ">

        <div class="col-md-6">
          <div class="carousel slide w-100" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img loading="lazy" class="img-fluid" src="<?php echo e(asset('theme/images/home/terminal.png')); ?>">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img-fluid" src="<?php echo e(asset('theme/images/home/terminal.png')); ?>">
              </div>

            </div>

          </div>
        </div>
        <div class="col-md-6  font-medium-2">
          <div class="card shadow">
            <div class="card-block text-justify">
              <p><?php echo $dropship->content; ?></p>

            </div>
            <div class="card-block text-xs-center">
              <h2 class="text-bold-700 mb-2"> <?php echo e($dropship->price_format); ?> đ </h2>
              <button data-src="<?php echo e(route('dropship.cart',$short->short)); ?>" class="btn btn-primary widget btn-lg block "> <?php echo e(__('Mua ngay')); ?> </button>

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
<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'widget','class' => 'modal-lg']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'widget','class' => 'modal-lg']); ?>
  <iframe src="about:blank" loading="lazy" />
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => []]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/web/dropship/share.blade.php ENDPATH**/ ?>
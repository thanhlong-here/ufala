<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid text-xs-center white bg-home']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid text-xs-center white bg-home']); ?>
    <h2 class="mb-2 "> <?php echo e(__("Bạn muốn thiết kế Landing Page ngành hàng nào?")); ?> </h2>
    <div class="container">
        <div class="offset-xs-3 col-xs-6">
            <ul class="nav nav-navbar tab-categories flex">
                <li class="nav-item active flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="<?php echo e(asset('theme/images/cates/all.png')); ?>" />
                        <div>Tất cả </div>

                    </a>
                </li>

            </ul>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid tab-content  bg-fa pt-2 pb-2']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid tab-content  bg-fa pt-2 pb-2']); ?>
    <div class="tab-pane active" id="tab1">
        <div class="row">
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div><div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>

        </div>
    </div>
    <div class="tab-pane" id="tab2">
        <div class="row">
        <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="<?php echo e(asset('theme/images/gallery/slide/5-slider.png')); ?>" class="w-100" />
            </div>
            

        </div>
    </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.auth','data' => []]); ?>
<?php $component->withName('layout.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/home.blade.php ENDPATH**/ ?>
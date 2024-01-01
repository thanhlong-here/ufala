<div class="navbar-wrapper">
    <div class="navbar-header pt-1">
        <ul class="pull-left nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <image class="logo" src="<?php echo e(asset('theme/images/logo/logo.png')); ?>" />
                </a>
            </li>

            <li class="nav-item p-1">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <?php echo e(__("Trang chủ")); ?>

                </a>
            </li>

            <li class="nav-item p-1">
                <a class="nav-link" href="#">
                    <?php echo e(__("Mẫu")); ?>

                </a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="#">
                    <?php echo e(__("Giá")); ?>

                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-container content container-fluid pt-1">
        <div id="navbar-mobile" class="row navbar-toggleable-sm">
            <div class="col-md-8">
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text" class="form-control round" name="search" placeholder="<?php echo e(__('Tìm kiếm Landing page phù hợp với bạn')); ?>">
                    <div class="form-control-position">
                        <i class="fa fa-search"></i>
                    </div>

                </fieldset>
            </div>
            <div class="float-xs-right">
                <ul class="nav navbar-nav">
                    <li style="margin-top:.5rem" class="nav-item mr-1">
                        <i class="font-large-1 icon-question"></i>
                    </li>
                    <?php if(Route::has('login')): ?>
                    <li class="nav-item mr-1">
                        <button  data-src="<?php echo e(route('login')); ?>" class="widget btn login-btn"><?php echo e(__('Đăng nhập')); ?></button>
                    </li>
                    <li class="nav-item">
                        <button data-src="<?php echo e(route('register')); ?>" class="widget btn btn-primary login-btn"><?php echo e(__('Đăng ký')); ?></button>
                    </li>
                    <?php $__env->startPush('outer'); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'widget']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'widget']); ?>
                        <iframe src="about:blank" loading="lazy" class="w-100" style="height: 333px;" />
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php $__env->stopPush(); ?>

                
                    
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\www\ufala\resources\views/web/inc/header.blade.php ENDPATH**/ ?>
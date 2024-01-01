<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .header-navbar {
        background: linear-gradient(90deg, #33CCCC 0%, #0085FF 100%);
        padding-top: .5rem;
    }

    .wp {
        width: 100%;
        height: 100%;
        margin-top: 2rem;
    }

    .screen {
        margin: auto;
        width: 360px;

    }

    .screen .frame {
        width: 450px;
        height: 100%;

        background-color: #fff;
        position: fixed;
        top: 0;
        z-index: -1;
    }

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'header-navbar navbar-fixed-top white']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'header-navbar navbar-fixed-top white']); ?>

    <ul class="pull-left nav navbar-nav">

        <li class="ml-2 nav-item">
            <a href="<?php echo e(route('builder.work')); ?>" class="nav-link"> <i class="fa fa-chevron-left"></i> <?php echo e(__("Trở về")); ?></a>
        </li>

    </ul>
    <div id="navbar-mobile" class="navbar-toggleable-sm">

        <div class="float-xs-right">
            <ul class="nav navbar-nav">

                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round">
                        <i class="icon-screen-smartphone"></i></button> </li>

                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round"><i class="icon-screen-desktop"></i></button> </li>

                <li class="nav-item mr-1">
                    <button class="btn  btn-second round"><?php echo e(__('Xuất bản')); ?></button>
                </li>
            </ul>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'app-content h-100 content  container-fluid']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'app-content h-100 content  container-fluid']); ?>

    <div class="zoom hw-100">
        <div class="screen">

            <div class="frame"></div>
            <div class="wp">

                
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['class' => 'vertical-layout fixed-navbar']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'vertical-layout fixed-navbar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/builder/preview.blade.php ENDPATH**/ ?>
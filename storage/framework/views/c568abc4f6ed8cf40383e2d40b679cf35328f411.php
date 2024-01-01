<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .header-navbar {
        background: linear-gradient(90deg, #33CCCC 0%, #0085FF 100%);
        padding-top: .5rem;
    }

    body.vertical-layout.vertical-menu.menu-expanded .main-menu {
        width: 420px;
        background-color: #333F48;
    }

    body.vertical-layout.vertical-menu.menu-expanded .content,
    body.vertical-layout.vertical-menu.menu-expanded .footer,
    body.vertical-layout.vertical-menu.menu-expanded .navbar .navbar-container {
        margin-left: 420px;

    }

    .element {
        width: 120px;
        height: 120px;
        border: .5px solid #999;
        float: left;
    }

    .material {
        width: 100%;
        min-height: 80px;
        border: .5px solid #fff;
        background-color: #4F5459;
        color: #fff;
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

    .tool-bar .edit {
        display: none;
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
            <a href="<?php echo e(route('home')); ?>" class="nav-link"> <i class="fa fa-chevron-left"></i> <?php echo e(__("Trở về trang chủ")); ?></a>
        </li>

    </ul>
    <div id="navbar-mobile" class="navbar-toggleable-sm">

        <div class="float-xs-right">
            <ul class="nav navbar-nav">
                <li class="nav-item mr-2">
                    <p class="nav-link"><i>
                Để lưu Landing Page của bạn, hãy 
                <a class="text-bold-600"><u>ĐĂNG KÝ</u></a> hoặc <a class="text-bold-600"><u> ĐĂNG NHẬP </u> </a></i>
                </p>
                </li>    
                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round">
                        <i class="icon-screen-smartphone"></i></button> </li>

                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round"><i class="icon-screen-desktop"></i></button> </li>
                <li class="nav-item mr-1"><a href="<?php echo e(route('builder.preview')); ?>" class="btn round btn-info"><?php echo e(__('Xem trước')); ?></a></li>
                <li class="nav-item mr-1">
                    <button class="btn  btn-second round"><?php echo e(__('Xuất bản')); ?></button>
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

<div id="builder">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'main-menu menu-fixed menu-light   material-bar ']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'main-menu menu-fixed menu-light   material-bar ']); ?>

        <div class="main-menu-content p-2">
            <?php $__currentLoopData = collect($images)->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mb-2">
                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-6">

                    <div class="material text-xs-center" data-type="image" data-src="<?php echo e(asset($item)); ?>">
                        <img src="<?php echo e(asset($item)); ?>" class="fluid" />
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'app-content h-100 content  container-fluid']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'app-content h-100 content  container-fluid']); ?>

        <div class="tool-bar container-fluid bg-white shadow">
            <div class="row p-1">
                <div class="place-tool col-xs-9">


                </div>
                <div class="col-xs-3">
                    <div class="pull-right control">
                        <span class="id">

                        </span>
                        <i class="unlock ft-unlock mr-1"></i>
                        <i class="trash ft ft-trash-2"> </i>
                    </div>

                </div>
            </div>
        </div>
        <div class="zoom hw-100">
            <div class="screen">

                <div class="frame"></div>
                <div class="wp">

                    <div class="element place-image" data-type="image" data-src="<?php echo e(asset('theme/images/gallery/1.jpg')); ?>">
                        <div class="display hw-100">
                            IMage

                        </div>
                        <div class="edit">


                        </div>
                    </div>

                    <div class="element place-content" data-type="content" data-content="Hello World">
                        <div class="display hw-100">
                            Content

                        </div>
                        <div class="edit">


                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('theme/js/app-menu.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/builder/place/image.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/builder/place/content.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/builder/builder.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['style' => 'background:#F5F7FA','class' => 'modal-xl h-100 mt-0','id' => 'widget']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'background:#F5F7FA','class' => 'modal-xl h-100 mt-0','id' => 'widget']); ?>
    <div class="p-1 right-0 fixed">
        <button type="button" class="close" data-dismiss="modal">
            <i class="icon-close font-large-1"></i>
        </button>
    </div>
    <iframe src="about:blank" loading="lazy" class="hw-100" />
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['dataOpen' => 'click','dataMenu' => 'vertical-menu','dataCol' => '2-columns','class' => 'vertical-layout vertical-menu 2-columns fixed-navbar menu-expanded ']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-open' => 'click','data-menu' => 'vertical-menu','data-col' => '2-columns','class' => 'vertical-layout vertical-menu 2-columns fixed-navbar menu-expanded ']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/builder/work.blade.php ENDPATH**/ ?>
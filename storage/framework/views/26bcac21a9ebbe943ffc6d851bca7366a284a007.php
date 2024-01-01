<?php
$openMenu = session('menuOpenSub');
?>

<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['tag' => 'nav','class' => 'header-navbar navbar-fixed-top navbar-light']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tag' => 'nav','class' => 'header-navbar navbar-fixed-top navbar-light']); ?>
  <div class="navbar-wrapper">
    <div class="navbar-header">

      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <image class="logo" src="<?php echo e(asset('theme/images/logo/logo.png')); ?>" />
          </a>
        </li>

        <li class="nav-item hidden-sm-down float-xs-right">
          <a href="#" class="nav-link fixed nav-menu-main menu-toggle hidden-xs">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>

      </ul>
      <div class="navbar-container content container-fluid pt-1">
        <div id="navbar-mobile" class="navbar-toggleable-sm">
          <?php echo $__env->yieldContent('menu-top'); ?>
        </div>
      </div>
    </div>

  </div>
  <div class="fixed top-0 right-0 px-6 py-4 sm:block">

    <ul class="nav navbar-nav float-xs-right">

      <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>">
          <i class="icon-power"></i>
          <span class="menu-title"> <?php echo e(__('Đăng xuất')); ?></span>
        </a>
      </li>

    </ul>
  </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'main-menu menu-fixed menu-light']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'main-menu menu-fixed menu-light']); ?>
  <div class="main-menu-content menu-accordion">
    <?php echo $__env->yieldContent('menu-side'); ?>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


<div class="app-content content container-fluid">
  <?php echo $__env->yieldContent('content'); ?>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<?php if($openMenu): ?>
<script>
  $('.sub-<?php echo e($openMenu); ?>').addClass('open');
</script>
<?php endif; ?>

<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['dataOpen' => 'click','dataMenu' => 'vertical-menu','dataCol' => '2-columns','class' => 'vertical-layout vertical-menu 2-columns fixed-navbar']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-open' => 'click','data-menu' => 'vertical-menu','data-col' => '2-columns','class' => 'vertical-layout vertical-menu 2-columns fixed-navbar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/layout/back.blade.php ENDPATH**/ ?>
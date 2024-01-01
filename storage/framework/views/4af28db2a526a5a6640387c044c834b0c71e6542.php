<?php $__env->startPush('css'); ?>
<style>
  body.vertical-layout.vertical-menu.menu-collapsed .navbar-header {
    float: left;
    width: 60px;
  }

  .navbar-light {
    background: none;
    z-index: 0;
  }

  .navbar-light .navbar-header {
    background: #fff;
  }

  .navbar-header .menu {
    position: absolute;
    padding: 14px 0px;
    right: 0;
  }

  .nav-item i {
    margin-right: 1rem;
  }

  .input-group-addon {
    border-radius: 1.5rem;
  }

  .card-round {
    border-radius: .8rem;
    padding: .8rem;
  }

  .overview .card-round {
    min-height: 120px;
    color: white;
  }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script>
  $("<?php echo e(session('menu-active','#menu-dashboard')); ?>").addClass('active');
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'header-navbar navbar-light navbar-fixed-top']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'header-navbar navbar-light navbar-fixed-top']); ?>
  <div class="navbar-wrapper">

    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li class="nav-item mobile-menu hidden-md-up float-xs-left">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs is-active">
            <i class="ft-menu font-large-1"></i></a>
        </li>
        <li class="nav-item">
          <a href="#" class="navbar-brand">
            <image class="logo brand-text" src="<?php echo e(asset('theme/images/logo/logo.png')); ?>" />
          </a>

        </li>
        <li class="nav-item hidden-sm-down float-xs-right">

          <a href="#" class="menu menu-toggle hidden-xs is-active">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>
      </ul>

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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'main-menu  menu-light  menu-fixed']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'main-menu  menu-light  menu-fixed']); ?>
  <div class="main-menu-content menu-accordion">
    <ul id="main-menu-navigation" class="navigation navigation-main">

      <li id="menu-dashboard" class="nav-item">
        <a href="<?php echo e(route('dropship.dashboard')); ?>">
          <i class="icon-grid"></i>
          <span class="menu-title"><?php echo e(__('Tổng quan')); ?></span>
        </a>
      </li>


      <li id="menu-dropship" class="nav-item">
        <a href="<?php echo e(route('dropship.index')); ?>">
          <i class="icon-tag"></i>
          <span class="menu-title"><?php echo e(__('Sản phẩm')); ?></span>
        </a>
      </li>
      <li id="menu-report" class="nav-item has-sub">
        <a href="#">
          <i class="icon-graph"></i>
          <span class="menu-title"><?php echo e(__('Báo cáo')); ?></span>
        </a>

        <ul class="menu-content">
          <li id="menu-camp" class="nav-item">
            <a href="<?php echo e(route('dropship.report.camp')); ?>">
              <span class="menu-title"><?php echo e(__('Chiến dịch')); ?></span>
            </a>
          </li>
          <li id="menu-order" class="nav-item">
            <a href="<?php echo e(route('dropship.report.order')); ?>">

              <span class="menu-title"><?php echo e(__('Đơn hàng')); ?></span>
            </a>
          </li>
        </ul>
      </li>
      <li id="menu-transaction" class="nav-item">
        <a href="<?php echo e(route('dropship.transaction')); ?>">
          <i class="icon-credit-card"></i>
          <span class="menu-title"><?php echo e(__('Thanh toán')); ?></span>
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



<div class="app-content content container-fluid">
  <?php echo $__env->yieldContent('content'); ?>
</div>

<?php $__env->stopSection(); ?>

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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/layout/drop.blade.php ENDPATH**/ ?>
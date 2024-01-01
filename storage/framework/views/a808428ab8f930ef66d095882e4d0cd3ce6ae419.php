<?php $__env->startSection('menu-side'); ?>

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li class="nav-item">
    <a href="<?php echo e(route('admin.index')); ?>">
      <i class="ft-home"></i>
      <span class="menu-title"><?php echo e(__('Bảng điều khiển')); ?></span>
    </a>
  </li>

  <li class="nav-item">
    <a href="<?php echo e(route('posts.index')); ?>">
      <i class="icon-book-open"></i>
      <span class="menu-title"><?php echo e(__('Bài viết')); ?></span>
    </a>

  </li>



  <li class="nav-item sub-sale has-sub">
    <a href="#">
      <i class="icon-social-dropbox"></i>
      <span class="menu-title"><?php echo e(__('Hệ thống dropship')); ?></span>
    </a>

    <ul class="menu-content">
      <li class="nav-item">
        <a href="<?php echo e(route('dropships.index')); ?>">

          <span class="menu-title"><?php echo e(__('Sản phẩm liên kết')); ?></span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#">

          <span class="menu-title"><?php echo e(__('Đơn hàng từ dropship')); ?></span>
        </a>
      </li>



    </ul>
  </li>

  

  <li class="nav-item">
    <a href="<?php echo e(route('users.index',['is'=>'admin'])); ?>">
      <i class="icon-ghost"></i>
      <span class="menu-title"><?php echo e(__('Tài khoản quản trị')); ?></span>
    </a>
  </li>
</ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu-top'); ?>

<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.back','data' => []]); ?>
<?php $component->withName('layout.back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\www\ufala\resources\views/components/layout/admin.blade.php ENDPATH**/ ?>
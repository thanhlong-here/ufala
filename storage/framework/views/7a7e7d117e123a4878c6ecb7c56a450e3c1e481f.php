<select name="status" class="form-control">
  <?php $__currentLoopData = [
    'publish' => __('Xuất bản'),
    'draft'   => __('Bảng nháp')
    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sta => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($sta); ?>">
    <?php echo e($name); ?>

  </option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH D:\www\ufala\resources\views/components/select/status.blade.php ENDPATH**/ ?>
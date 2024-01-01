<?php if($paginator->hasPages()): ?>
   
    <div class="p-1" style="width:25rem">
     
        <?php if(!$paginator->onFirstPage()): ?>
      
            <div class="col-xs-6 pull-right" ><a class="btn btn-block  btn-info" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo e(__('Lùi lại')); ?></a></div>
        <?php endif; ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <div class="col-xs-6 pull-right"><a class="btn btn-block btn-info" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo e(__('Tiếp theo')); ?></a></div>
        <?php endif; ?>
      
    </div>
<?php endif; ?>
<?php /**PATH D:\www\ufala\resources\views/vendor/pagination/simple.blade.php ENDPATH**/ ?>
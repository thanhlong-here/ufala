<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
    <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
        <div class="navbar-wrapper">
            <h4> <?php echo e(__('Chia sẻ link liên kết')); ?></h4>

        </div>
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">

            <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
        </div>

    </nav>
   

    <div class="container p-2">
        <div class="card">
            <div class="card-block">
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text"
                    value=" <?php echo e(route('dropship.share',$link->short)); ?>" disabled
                    class="form-control form-control-lg input-lg" id="iconLeft2" >
                    <div class="form-control-position">
                        <i class="ft-share font-medium-3"></i>
                    </div>
                </fieldset>
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
<?php $__env->startPush('script'); ?>
<script>
    $('#widget iframe', window.parent.document).height(333);
</script>

<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['class' => 'fixed-navbar bg-white']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'fixed-navbar bg-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/share.blade.php ENDPATH**/ ?>
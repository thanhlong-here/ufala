
<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'modal-header']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-header']); ?>
  <button type="button" class="close close-parent">
    <span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title text-xs-center">
    <?php echo e(__('Đăng nhập')); ?>

  </h4>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'modal-body']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-body']); ?>


  <div class="container">
    <div class="content-header text-xs-center">
      <div class="card">
        <div class="card-block">
          <div class="card-body">

            <div class="form-group row one">
              <button type="button" id="btnFacebook" onclick="loginFacebook()" name="login" value="facebook" class="btn btn-facebook block">
                <i class="fa fa-facebook"></i> <span class="ml-1">
                  <?php echo e(__('Tiếp tục với Facebook')); ?> </span>

              </button>
            </div>

            <div class="form-group row one">
              <button type="button" id="btnGoogle" onclick="loginGoogle()" name="login" value="google" class="btn bg-google white  block">
                <i class="fa fa-google-plus"></i><span class="ml-1">
                  <?php echo e(__('Tiếp tục với Google')); ?>

                </span>
              </button>
            </div>


            <div class="form-group row">
              <button type="button" data-backdrop="false" data-toggle="modal" data-target="#modal-email" class="btn btn-primary block">
                <i class="fa fa-envelope-o mr-2"></i> <?php echo e(__('Tiếp tục với Email')); ?>

              </button>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'm-0 w-100 h-100 bg-white','id' => 'modal-email']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'm-0 w-100 h-100 bg-white','id' => 'modal-email']); ?>
  <div class="modal-header">
    <button type="button" data-dismiss="modal" class="pull-left">
      <i class="ft-arrow-left"></i>
    </button>
    <h4 class="modal-title text-xs-center">
      <?php echo e(__('Tiếp tục với Email')); ?>

    </h4>
  </div>
  <div class="modal-body">
    <div class="card">
      <div class="card-block">
        <div class="card-body">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('checkemail')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('checkemail')).'']); ?>
            <div class="form-group">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <input placeholder="Enter input email" wire:model="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
            </div>
            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-block"> <?php echo e(__('Tiếp tục')); ?> </button>
            </div>
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>

<script src="<?php echo e(asset('theme/js/firebase.js')); ?>"></script>
<script>
    var _token = '<?php echo e(csrf_token()); ?>';
    var _firebase = "<?php echo e(route('login.firebase')); ?>";
</script>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['dataHeight' => '333','class' => 'bg-white has-parent']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-height' => '333','class' => 'bg-white has-parent']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/login.blade.php ENDPATH**/ ?>
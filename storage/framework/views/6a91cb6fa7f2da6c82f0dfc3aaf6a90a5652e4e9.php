<?php $__env->startSection('body'); ?>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header no-border">
                        <div class="card-title text-xs-center">
                            <div class="p-1">
                                <a href="<?php echo e(route('home')); ?>">
                                    <image class="logo" src="<?php echo e(asset('theme/images/logo/logo.png')); ?>" />
                                </a>
                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span><?php echo e(__('Đăng nhập bằng Email')); ?></span></h6>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form-horizontal form-simple','action' => ''.e(route('login')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-horizontal form-simple','action' => ''.e(route('login')).'']); ?>
                                <input type="hidden" name="_redirect" value="<?php echo e(route('admin.index')); ?>" />
                                <fieldset class="mb-2 form-group position-relative has-icon-left mb-0">
                                    <input type="email" name="email" class="form-control form-control-lg input-lg" placeholder="<?php echo e(__('Email đăng nhập')); ?>" required>
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-2 form-group position-relative has-icon-left">
                                    <input type="password" class="form-control form-control-lg input-lg" name="password" placeholder="<?php echo e(__('Mật khẩu')); ?>" required>
                                    <div class="form-control-position">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-2 form-group row">
                                    <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" id="remember-me" class="chk-remember">
                                            <label for="remember-me"><?php echo e(__('Ghi nhớ')); ?></label>
                                        </fieldset>
                                    </div>

                                </fieldset>
                                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> <?php echo e(__('Đăng nhập')); ?></button>
                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['class' => 'blank-page']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'blank-page']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/login.blade.php ENDPATH**/ ?>
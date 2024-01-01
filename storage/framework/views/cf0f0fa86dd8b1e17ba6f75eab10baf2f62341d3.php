

<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>

  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper row">

      <div class="col-md-8">
        <ul class="nav navbar-nav">

          <li class="nav-item">

            <button type="button" class="close-parent black close"> <i class="ft-arrow-left"></i></button>
          </li>
          <li class="nav-item">
            <h4> <?php echo e(__("Chỉnh sửa thông tin")); ?> </h4>
          </li>
        </ul>

      </div>



    </div>

  </nav>


  <div class="pt-8 container">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('contacts.update',$contact)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('contacts.update',$contact)).'']); ?>
      <input type="hidden" name="prefix" value="<?php echo e($contact->prefix); ?>" />
      <div class="card">

        <div class="card-body">
          <div class="card-block">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <input class="form-control" value="<?php echo e($contact->name); ?>" placeholder="<?php echo e(__('Tên liên hệ')); ?>" name="name" />

                </div>

                <div class="form-group">
                  <input class="form-control" value="<?php echo e($contact->email); ?>" placeholder="Email" type="email" name="email" />
                </div>
                <div class="form-group">
                  <input class="form-control" value="<?php echo e($contact->phone_number); ?>" placeholder="Phone" type="number" name="phone_number" />

                </div>

                <div class="form-group row">
                  <div class="col-md-4">
                    <select name="city_id" class="form-control">
                      <option value="">--<?php echo e(__('Chọn khu vực')); ?></option>
                      <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php echo e(($contact->city_id == $city->id) ? 'selected' : ''); ?> value="<?php echo e($city->id); ?>">
                        <?php echo e($city->name); ?>

                      </option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="col-md-8">
                    <input type="text" placeholder="<?php echo e(__('Địa chỉ')); ?>" class="form-control" value="<?php echo e($contact->address); ?>" name="address" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="description" placeholder="Ghi chú" rows='8'> <?php echo e($contact->description); ?></textarea>
                </div>
                <div class="form-group row">
                  <div class="col-md-8">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.categories','data' => ['name' => 'category_id','class' => 'form-control','prefix' => ''.e($contact->prefix).'']]); ?>
<?php $component->withName('select.categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'category_id','class' => 'form-control','prefix' => ''.e($contact->prefix).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                  </div>
                  <div class="col-md-4">

                    <button class="btn btn-primary block"><?php echo e(__('Cập nhật')); ?></button>
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
  </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.admin','data' => []]); ?>
<?php $component->withName('layout.admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/contact/edit.blade.php ENDPATH**/ ?>
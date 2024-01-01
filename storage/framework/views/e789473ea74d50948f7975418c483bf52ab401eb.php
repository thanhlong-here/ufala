<?php $__env->startPush('css'); ?>
<link href=" <?php echo e(asset('theme/view/dropship/style.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('theme/view/dropship/functions.js')); ?>"></script>
<script>
  _token = '<?php echo e(csrf_token()); ?>';
  _upload = '<?php echo e(route("tmp.upload")); ?>';
  _remove = "<?php echo e(url('dev/comp/tmp/remove')); ?>/";


  $(window).on('load', function() {
    tabs = $('.tabs .jump');
    jump();
    scroll();

    upload();
    addRemove();
  });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('body'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav tabs">


        <li class="nav-item">
          <a class="nav-link jump to" href="#info"> <?php echo e(__("Thông tin sản phẩm")); ?> </a>
        </li>

        <li class="nav-item">
          <a class="nav-link jump" href="#policy"> <?php echo e(__("Chính sách bán hàng")); ?> </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link jump" href="#gallery"> <?php echo e(__("Hình ảnh & video")); ?> </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link jump" href="#publish"> <?php echo e(__("Xuất bản")); ?> </a>
        </li>

      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'POST','enctype' => 'multipart/form-data','action' => ''.e(route('dropships.store')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'POST','enctype' => 'multipart/form-data','action' => ''.e(route('dropships.store')).'']); ?>



    <div class="pt-2 container">
      <div class="offset-md-2 col-md-8">
        <div class="card">
          <div id="info" class="card-header">
            <h4 class="card-title"><?php echo e(__('Thông tin sản phẩm')); ?></h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">
                <div class="form-group">

                  <input type="text" placeholder="<?php echo e(__('Tên sản phẩm')); ?>" class="form-control font-medium-2" name="name" />

                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.categories','data' => ['name' => 'category_id','class' => 'form-control font-medium-2','prefix' => 'dropship']]); ?>
<?php $component->withName('select.categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'category_id','class' => 'form-control font-medium-2','prefix' => 'dropship']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                  </div>
                  <div class="col-md-6">
                    <select name="supplier_id" class="form-control font-medium-2">
                      <option value="">--<?php echo e(__('Chọn nhà cung cấp')); ?>--</option>
                    </select>
                  </div>

                </div>
                <div class="form-group ">
                  <label><?php echo e(__('Mô tả')); ?> :</label>
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['name' => 'content','placeholder' => ''.e(__('Mô tả sản phẩm')).'','mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'content','placeholder' => ''.e(__('Mô tả sản phẩm')).'','mode' => 'editor']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">
            <a href="#policy" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
          </div>
        </div>



        <div class="card">
          <div id="policy" class="card-header">
            <h4 class="card-title"><?php echo e(__('Chính sách bán hàng')); ?></h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">
                <div class="form-group row ">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon"><?php echo e(__('Giá bán')); ?> :</span>
                      <input type="number" name="price" class="form-control font-medium-2">
                      <span class="input-group-addon bg-white"> đ </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <fieldset class=" position-relative">
                      <div class="input-group position-relative ">
                        <span class="input-group-addon"><?php echo e(__('Thưởng Hoa hồng')); ?> :</span>
                        <input type="number" name="dropship_bonus" placeholder="20" class="form-control font-medium-2">
                        <span class="input-group-addon bg-white"> % <?php echo e(__('Giá bán')); ?> </span>
                      </div>
                  </div>
                  </fieldset>
                </div>
                <div class="form-group ">
                  <label><?php echo e(__('Mô tả chính sách')); ?> :</label>
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['name' => 'dropship_content','placeholder' => ''.e(__('Chính sách bán hàng')).'','mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'dropship_content','placeholder' => ''.e(__('Chính sách bán hàng')).'','mode' => 'editor']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">
            <ul class="nav">
              <li class="nav-item mb-1">
                <a href="#info" class=" jump btn"> <i class="ft-arrow-up"></i> </a>
              </li>
              <li class="nav-item">
                <a href="#gallery" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
              </li>
            </ul>


          </div>
        </div>

        <div class="card">
          <div id="gallery" class="card-header">
            <h4 class="card-title"><?php echo e(__('Hình ảnh hoặc video')); ?></h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block row up">
                <div class="col-md-4 action">
                  <div class="note text-xs-center">
                    <p>
                      Chọn hình ảnh gửi lên
                    </p>
                    <p>Hình ảnh có kích thước tối đa : 720x1280</p>
                    <p>Dung lượng tối đa : 200MB </p>

                  </div>

                  <label class="btn btn-primary block round">
                    <?php echo e(__('Upload File')); ?>

                    <input type="file" class="none" name="media[]" multiple accept="image/*" />
                  </label>

                </div>
                <div class="col-md-8 thumb">


                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">


            <ul class="nav">
              <li class="nav-item mb-1">
                <a href="#policy" class="jump btn"> <i class="ft-arrow-up"></i> </a>
              </li>
              <li class="nav-item">
                <a href="#publish" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div id="publish" class="card-header">
            <h4 class="card-title"><?php echo e(__('Xuất bản')); ?></h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">

                <div class="form-group ">

                  <div class="row">

                    <div class="col-md-4">
                      <label><?php echo e(__(' Thời gian bắt đầu ')); ?> :</label>
                      <input type="date" name="dropship_start_at" class="form-control">
                    </div>

                    <div class="col-md-4">
                      <label><?php echo e(__(' Thời gian kết thúc ')); ?> :</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label><?php echo e(__(' Giới hạn số lượng ')); ?> :</label>
                      <input type="number" placeholder="<?php echo e(__('Không giới hạn')); ?>" name="dropship_limit" class="form-control">

                    </div>
                  </div>

                </div>




                <div class="card-footer">
                  <div class="float-xs-right  row">
                    <ul class="nav navbar-nav">
                      <li class="nav-item">
                        <select style="width: 200px;" class="form-control pull-left">
                          <?php $__currentLoopData = config('dropship.status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($key); ?>"> <?php echo e(__($value)); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </select>
                      </li>
                      <li class="nav-item">
                        <button class="btn btn-primary"><?php echo e(__('Tạo mới')); ?></button>
                      </li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="nav-jump">
            <a href="#policy" class="jump btn btn-secondary"> <i class="ft-arrow-up"></i> </a>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/dropship/create.blade.php ENDPATH**/ ?>
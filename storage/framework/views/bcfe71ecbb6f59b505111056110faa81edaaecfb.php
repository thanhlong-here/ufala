<?php $attributes = $attributes->exceptProps([
'category'=>0,
'action'=>'products.update',
'title' =>__('Chỉnh sửa thông tin sản phẩm'),
'prefix' => 'product',
'product' => new App\Models\Product]); ?>
<?php foreach (array_filter(([
'category'=>0,
'action'=>'products.update',
'title' =>__('Chỉnh sửa thông tin sản phẩm'),
'prefix' => 'product',
'product' => new App\Models\Product]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$action = $product->id ? route('products.update',$product) : route('products.store');
?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => ''.e($product->id ? 'PUT' :'POST').'','enctype' => 'multipart/form-data','action' => ''.e($action).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => ''.e($product->id ? 'PUT' :'POST').'','enctype' => 'multipart/form-data','action' => ''.e($action).'']); ?>
  <input type="hidden" name="prefix" value="<?php echo e($prefix); ?>" />

  <div style="z-index: 99; top:0" class="fixed block ">
    <div class="row bg-white shadow p-1">
      <div class="col-md-4">

        <ul class="nav navbar-nav">

          <li class="nav-item">

            <button type="button" class="close-parent black close"> <i class="ft-arrow-left"></i></button>
          </li>
          <li class="nav-item">
            <h4><?php echo e($title); ?> </h4>
          </li>
        </ul>

      </div>
      <div class="col-md-8">
        <div class="pull-right">

          <ul class="pull-right nav navbar-nav">
            <li class="nav-item">
              <input class="form-control" name="code" placeholder="<?php echo e(__('Mã gợi nhớ')); ?>" value="<?php echo e($product->code); ?>" />
            </li>
            <li class="nav-item">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.categories','data' => ['name' => 'category_id','class' => 'form-control','prefix' => ''.e($prefix).'','selected' => ''.e($product->category_id).'']]); ?>
<?php $component->withName('select.categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'category_id','class' => 'form-control','prefix' => ''.e($prefix).'','selected' => ''.e($product->category_id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            </li>
            <li class="nav-item">

              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.status','data' => []]); ?>
<?php $component->withName('select.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </li>
            <li class="nav-item">
              <button id="btn_send" type="submit" class="btn btn-primary">
                <?php echo e(__('Gửi thông tin')); ?>

              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-2 container">

    <div class="col-md-8">
      <div class="card">

        <div class="card-block">
          <div class="form-group">

            <input type="text" placeholder="<?php echo e(__('Tên sản phẩm')); ?>" class="form-control" value="<?php echo e($product->name); ?>" name="name" />

          </div>


          <div class="form-group ">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['placeholder' => ''.e(__('Mô tả sản phẩm')).'','mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['placeholder' => ''.e(__('Mô tả sản phẩm')).'','mode' => 'editor']); ?><?php echo $product->content; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          </div>
        </div>
      </div>


      <div class="form-group ">
        <ul class="nav nav-tabs nav-top-border no-hover-bg">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#layout_mobile" aria-expanded="true">
              <i class="fa fa-play"></i> <?php echo e(__("Giao diện di động")); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#layout_desktop" aria-expanded="false">
              <i class="fa fa-flag"></i><?php echo e(__("Giao diện Desktop")); ?></a>
          </li>

        </ul>
        <div class="tab-content px-1 pt-1">
          <div role="tabpanel" class="tab-pane active" id="layout_mobile">
            <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
          </div>
          <div role="tabpanel" class="tab-pane" id="layout_desktop">
            <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-4">




      <div class="card box">
        <div class="card-header">
          <h4 class="card-title"><?php echo e(__('Xét giá')); ?></h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body">
          <div class="card-block">
            <div class="row mb-2">

              <label class="col-xs-4 font-medium-2"><?php echo e(__('Giá nhập')); ?> :</label>
              <div class="col-xs-8">
                <div class="input-group">
                  <input type="number" name="price_purchase" value="<?php echo e($product->price_purchase); ?>" class="form-control">
                  <span class="input-group-addon"> đ </span>
                </div>
              </div>
            </div>

            <div class="row mb-2">

              <label class="col-xs-4 font-medium-2"><?php echo e(__('Giá bán')); ?> :</label>
              <div class="col-xs-8">
                <div class="input-group">
                  <input type="number" name="price" value="<?php echo e($product->price); ?>" class="form-control">
                  <span class="input-group-addon"> đ </span>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title"><?php echo e(__('Chiến dịch')); ?></h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body">
          <div class="card-block">


            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2"><?php echo e(__('Thưởng CTV')); ?> : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_value" value="$product->bonus_value" class="form-control" placeholder="<?php echo e(__('Thưởng sau khi bán')); ?>">
                  <span class="input-group-addon"> % <?php echo e(__('Giá bán')); ?> </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2"><?php echo e(__('Thưởng CTV')); ?> : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_percent" value="$product->bonus_value" class="form-control" placeholder="<?php echo e(__('Thưởng sau khi bán')); ?>">
                  <span class="input-group-addon"> % <?php echo e(__('Giá bán')); ?> </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2"><?php echo e(__('Số lượng')); ?> : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="total_limit" value="$product->total_limit" class="form-control" placeholder="<?php echo e(__('Thưởng sau khi bán')); ?>">
                  <span class="input-group-addon"> <?php echo e(__('Sản phẩm')); ?> </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2"><?php echo e(__('Thời gian')); ?> : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_value" value="$product->bonus_value" class="form-control" placeholder="<?php echo e(__('Thưởng sau khi bán')); ?>">
                  <span class="input-group-addon"> % <?php echo e(__('Giá bán')); ?> </span>
                </div>
              </fieldset>

            </div>

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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/product/edit.blade.php ENDPATH**/ ?>
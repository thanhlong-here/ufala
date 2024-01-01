<?php $attributes = $attributes->exceptProps([
'action'=>'posts.update',
'post' => new App\Models\Post,
'title'=> 'Chỉnh sửa bài viết'
]); ?>
<?php foreach (array_filter(([
'action'=>'posts.update',
'post' => new App\Models\Post,
'title'=> 'Chỉnh sửa bài viết'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','method' => ''.e($post->id ? 'PUT' :'POST').'','enctype' => 'multipart/form-data','action' => ''.e(route($action,$post)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','method' => ''.e($post->id ? 'PUT' :'POST').'','enctype' => 'multipart/form-data','action' => ''.e(route($action,$post)).'']); ?>
  <div style="z-index: 99; top:0" class="fixed block ">
    <div class="p-1 bg-white shadow">
      <div class="row">
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

          <ul class="pull-right nav navbar-nav">
            <li class="nav-item">
              <input class="form-control" name="code" placeholder="<?php echo e(__('Mã gợi nhớ')); ?>" value="<?php echo e($post->code); ?>" />
            </li>
            <li class="nav-item">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.categories','data' => ['name' => 'category_id','class' => 'form-control','selected' => ''.e($post->category_id).'']]); ?>
<?php $component->withName('select.categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'category_id','class' => 'form-control','selected' => ''.e($post->category_id).'']); ?>
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
      <div class="form-group">
        <input type="text" placeholder="<?php echo e(__('Tiêu đề bài viết')); ?>" class="form-control" value="<?php echo e($post->name); ?>" name="name" />

      </div>
      <div class="form-group card">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['mode' => 'editor']); ?><?php echo $post->content; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      </div>
    </div>
    <div class="col-xs-4">
      
      <div class="card box">
        <div class="card-header">
          <h4 class="card-title"><?php echo e(__('Hình đại diện')); ?></h4>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="card-body collapse in text-xs-center">
          <?php if(empty($Post->avatar)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','style' => 'height:120px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          <?php else: ?>
          <?php echo e($Post->avatar->src); ?>

          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e(asset($Post->avatar->src)).'','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e(asset($Post->avatar->src)).'','style' => 'height:120px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          <?php endif; ?>

        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title"><?php echo e(__('Tối ưu SEO')); ?></h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body collapse">
          <div class="card-block">

            <div class="form-group row">
              <label class="label-control"><?php echo e(__('Meta title')); ?> </label>
              <input class="form-control" name="meta_title" value="<?php echo e($post->meta_title); ?>" />
            </div>
            <div class="form-group row">
              <label class="label-control"><?php echo e(__('Meta keyword')); ?> </label>
              <input class="form-control" name="meta_title" value="<?php echo e($post->meta_keyword); ?>" />
            </div>

            <div class="form-group row">
              <label class="label-control"><?php echo e(__('Meta description')); ?> </label>
              <textarea class="form-control" name="meta description"><?php echo e($post->meta_description); ?></textarea>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/post/edit.blade.php ENDPATH**/ ?>
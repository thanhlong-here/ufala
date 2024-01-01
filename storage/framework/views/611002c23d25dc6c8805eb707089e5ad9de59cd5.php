<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('posts.update',$Post)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','method' => 'PUT','enctype' => 'multipart/form-data','action' => ''.e(route('posts.update',$Post)).'']); ?>

  <div class="form-body">
    


    <div class="col-md-8">
      <div class="form-group">
        <input type="text" placeholder="" class="form-control input-lg" value=" <?php echo e($Post->title); ?>" name="title" />

      </div>
      

      <div class="form-group card">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['mode' => 'editor']); ?><?php echo $Post->content; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>


    </div>
    <div class="col-xs-4">
    <div class="card box">
        <div class="form-group text-xs-center">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e(empty($Post->avatar) ? '': asset($Post->avatar->src)).'','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e(empty($Post->avatar) ? '': asset($Post->avatar->src)).'','style' => 'height:120px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title"><?php echo e(Theme::title('optimize seo')); ?></h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse">
          <div class="card-block">

            <div class="form-group row">
              <label class="label-control"><?php echo e(Theme::title('meta title')); ?> </label>
              <input class="form-control" name="meta_title" value="<?php echo e($Post->meta_title); ?>" />
            </div>
            <div class="form-group row">
              <label class="label-control"><?php echo e(Theme::title('meta keyword')); ?> </label>
              <input class="form-control" name="meta_title" value="<?php echo e($Post->meta_keyword); ?>" />
            </div>

            <div class="form-group row">
              <label class="label-control"><?php echo e(Theme::title('meta description')); ?> </label>
              <textarea class="form-control" name="meta description"><?php echo e($Post->meta_description); ?></textarea>
            </div>
          </div>
        </div>
      </div>
     



      <?php if($Post->parent_id): ?>
      <div class="card box">

        <div class="card-block ">

          <div class="form-group">


            <div class="row">
              <span class="menu-title"><?php echo e(Theme::title('category')); ?> :</span>

              <label class="pull-right display-inline-block custom-control custom-radio">
                <input type="radio" checked name="category_id" value="<?php echo e(request('category')); ?>" class="custom-control-input">
                <span class="bg-success custom-control-indicator"></span>
                <span class="custom-control-description">
                  <?php echo e(Theme::title('no choice')); ?>

                </span>
              </label>


            </div>
            <div class="mt-1">
              <?php echo $__env->make('dev.master.com.treeCategories',[
              'selected' => $Post->category_id
              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

          </div>

        </div>


      </div>
      <?php endif; ?>
      <div class="box card p-1">
          <div class="row mb-1">
            <label class="col-xs-4"> Code :</label>
            <div class="col-xs-8">
              <input class="form-control" name="code" value="<?php echo e($Post->code); ?>" />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-7">
              <select name="status" class="form-control">
                <?php $__currentLoopData = ['publish','draft']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($sta); ?>">
                  <?php echo e(__('status.'.$sta)); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="col-xs-5 float-xs-right">
              <button type="submit" class="btn btn-block btn-primary mr-1"><?php echo e(__('Save & close')); ?></button>
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

<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.wiget','data' => ['title' => ''.e(Theme::title('edit content')).'','id' => 'modal-src']]); ?>
<?php $component->withName('layout.wiget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(Theme::title('edit content')).'','id' => 'modal-src']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/dev/post/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-header row mb-1']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-header row mb-1']); ?>

        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">
                <?php echo e(__('Danh sách bài viết')); ?>


            </h3>
        </div>
      
        <div class="content-header-right col-md-6">
            <div class="pull-right">
              

                <button data-src="<?php echo e($xlink->categories); ?>" class="widget btn mr-1">
                    <i class="ft-grid"> </i>

                    <?php echo e(__('Nhóm sản phẩm')); ?>

                </button>
               
                <button data-src="<?php echo e($xlink->create); ?>" class="widget btn  btn-primary">
                    <i class="ft-plus"> </i>

                    <?php echo e(__('Viết bài mới')); ?>

                </button>
            </div>
        </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-body']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-body']); ?>
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.post.search','data' => ['prefix' => ''.e($prefix).'']]); ?>
<?php $component->withName('post.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['prefix' => ''.e($prefix).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>

                <div id="table" class="table-responsive">

                    <table class="table">
                        <thead>
                            <th style="width:2rem">

                            </th>

                            <th style="width:12rem">
                                <?php echo e(__('Mã bài viết')); ?>

                            </th>
                            <th style="width:2rem">
                                <?php echo e(__('Ưu tiên')); ?>

                            </th>
                            <th>
                                <?php echo e(__('Tiêu đề')); ?>

                            </th>

                            <th>
                                <?php echo e(__('Danh mục')); ?>

                            </th>

                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $edit=route('posts.edit',$row);
                            ?>
                            <?php $__env->startPush('outer'); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'posts.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'posts.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php $__env->stopPush(); ?>
                            <tr>
                                <th>
                                    <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                                    </button>

                                </th>

                                <td>
                                    <button data-src="<?php echo e($edit); ?>" class="widget btn btn-sm btn-icon btn-primary">
                                        <i class="ft ft-edit"></i>
                                    </button>
                                    <?php echo e($row->code); ?>

                                </td>
                                <td>
                                    <?php echo e($row->priority); ?>

                                </td>
                                <td>
                                    <?php echo e($row->name); ?>

                                </td>

                                <td>

                                    <?php echo e($row->category->name ?? ''); ?>

                                </td>

                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>


                    </table>
                    <div class="pull-right">
                        <?php echo e($list->appends(request()->input())->render()); ?>

                    </div>
                </div>
            </div>
        </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.admin','data' => []]); ?>
<?php $component->withName('layout.admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/post/index.blade.php ENDPATH**/ ?>
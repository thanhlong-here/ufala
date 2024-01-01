<?php
$title = config('app.prefix')[$prefix] ?? 'liên lạc';

$title= __( 'Danh sách '.$title);

?>
<?php $__env->startSection('body'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-wrapper']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-wrapper']); ?>
    <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
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
                <div class="pull-right">
                    <button data-src="<?php echo e($xlink->categories); ?>" class="widget btn mr-1">
                        <i class="ft-grid"> </i>
                        <?php echo e(__('Nhóm ')); ?>

                    </button>

                    <button data-src="<?php echo e($xlink->create); ?>" class="widget btn  btn-primary">
                        <i class="ft-plus"> </i>
                        <?php echo e(__('Thêm mới')); ?>

                    </button>
                </div>

            </div>
        </div>

    </nav>
    <div class="container pt-2">
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    Tìm kiếm
                </div>

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width:1rem">

                            </th>
                            <th style="width:1rem">

                            </th>
                            <th>
                                <?php echo e(__('Thông tin')); ?>

                            </th>
                            <th style="width:12rem">

                                <?php echo e(__('Địa chỉ')); ?>

                            </th>
                            <th>

                                <?php echo e(__('Email')); ?>

                            </th>
                            <th>

                                <?php echo e(__('Số điện thoại')); ?>

                            </th>
                            <th>

                                <?php echo e(__('Nhóm')); ?>

                            </th>

                            <th style="width:2rem">
                                <?php echo e(__('Trạng thái')); ?>

                            </th>


                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $edit = route('contacts.edit',$row);

                            ?>

                            <?php $__env->startPush('outer'); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'contacts.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'contacts.destroy']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php $__env->stopPush(); ?>

                            <tr>
                                <th>
                                    <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
                                </th>
                                <th>

                                    <button data-src="<?php echo e($edit); ?>" class="widget btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
                                </th>

                                <td>
                                    <div class="font-medium-1 text-bold-600">
                                        <?php echo e($row->name); ?>

                                    </div>
                                    <div>
                                        <?php echo e(__('Lúc')); ?> : <?php echo e($row->created_at); ?>

                                    </div>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        <?php echo e($row->address); ?>

                                    </span>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        <?php echo e($row->email); ?>

                                    </span>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        <?php echo e($row->phone_number); ?>

                                    </span>
                                </td>


                                <td>
                                    <?php if($row->category): ?>
                                    <span class="font-medium-2">
                                        <?php echo e($row->category->name); ?>

                                    </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="float-xs-right">
                                        <?php echo e($row->status); ?>

                                    </span>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>

                    <div class="pull-right">
                        <?php echo e($list->appends(request()->input())->render('vendor.pagination.simple')); ?>

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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-xl mt-0','id' => 'widget']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-xl mt-0','id' => 'widget']); ?>

    <iframe src="about:blank" loading="lazy" />
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>
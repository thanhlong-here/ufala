<?php $__env->startPush('js'); ?>

<script src="<?php echo e(asset('theme/js/charts/chart.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(window).on("load", function() {

        //Get the context of the Chart canvas element we want to select
        var ctx = $("#line-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'top',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: true,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Ngày'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: true,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Lượt'
                    }
                }]
            },
            title: {
                display: true,
                text: '7 Ngày gần nhất'
            }
        };

        // Chart Data
        var chartData = {
            labels: ['Click', 'Đơn hàng', 'Hủy'],
            datasets: [{
                    label: "Click",
                    data: [15, 16, 20, 25, 16, 20, 25],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#9C27B0",
                    pointBorderColor: "#9C27B0",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                }, {
                    label: "Đơn hàng",
                    data: [5, 6, 2, 5, 6, 2, 5],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#00A5A8",
                    pointBorderColor: "#00A5A8",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                },
                {
                    label: "Hủy",
                    data: [1, 1, 2, 5, 10, 8, 6],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#00A5A8",
                    pointBorderColor: "#00A5A8",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                }

            ]
        };

        var config = {
            type: 'line',

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var lineChart = new Chart(ctx, config);
    });
</script>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'content-body']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'content-body']); ?>
        <div class="card shadow">
            <div class="card-header">

                <div class="row">

                    <div class="col-md-8">
                        <h4 class="card-title mb-2"><?php echo e(__('Dữ liệu chiến dịch')); ?></h4>


                    </div>


                    <div class="col-md-4">

                        <div class="block">
                            <input style="width:50%;" name="start_at" class="form-control pull-left" type="date" />
                            <input style="width:50%;" name="start_end" class="form-control pull-right" type="date" />
                        </div>


                    </div>

                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 skin skin-square">

                        <fieldset>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" checked value="all" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Tất cả')); ?></span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="click" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Click')); ?></span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="order" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Đơn hàng')); ?></span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="cancel" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Hủy')); ?></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6 text-xs-right">

                    </div>
                </div>
                <div class="chartjs">
                    <canvas id="line-chart" height="420"></canvas>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-4">

                        <fieldset class="form-group position-relative has-icon-left">
                            <input name="product_name" type="text" class="form-control round" placeholder="<?php echo e(__('Tên sản phẩm')); ?>">
                            <div class="form-control-position">
                                <i class="ft-search"></i>
                            </div>
                        </fieldset>

                    </div>
                </div>

            </div>
            <div class="card-block">

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>

                            <th><?php echo e(__('Tên sản phẩm')); ?></th>
                            <th>
                                <?php echo e(__('Lượt click')); ?>

                            </th>
                            <th>
                                <?php echo e(__('Lượt đặt hàng')); ?>

                            </th>

                            <th>
                                <?php echo e(__('Tỉ lệ chuyển đổi')); ?>

                            </th>



                            <th>
                                <?php echo e(__('Đơn thành công')); ?>

                            </th>
                            <th>
                                <?php echo e(__('Doanh thu chờ nhận')); ?>

                            </th>
                            <th>
                                <?php echo e(__('Thực nhận')); ?>

                            </th>


                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $collect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>

                                <td>
                                    <p class="text-bold-600">
                                        <?php echo e($row->productName); ?>

                                    </p>

                                </td>

                                <td>
                                    <?php echo e($row->totalClick); ?>

                                </td>
                                <td>
                                    <?php echo e($row->totalOrder); ?>

                                </td>

                                <td>
                                    <?php echo e($row->percent); ?> %
                                </td>

                                <td>
                                    <?php echo e($row->totalOrderFinish); ?>

                                </td>
                                <td>
                                    <?php echo e($row->revenuePending); ?>

                                </td>
                                <td>
                                    <?php echo e($row->revenue); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>

                    <div class="pull-right">
                        <?php echo e($list->render()); ?>


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
<?php $__env->stopSection(); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.drop','data' => []]); ?>
<?php $component->withName('layout.drop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/camp.blade.php ENDPATH**/ ?>
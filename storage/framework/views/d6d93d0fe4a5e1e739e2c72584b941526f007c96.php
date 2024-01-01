<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('theme/css/colors/palette-gradient.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>

<script src="<?php echo e(asset('theme/js/charts/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/pickers/daterange/daterangepicker.js')); ?>" type="text/javascript"></script>
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
                display: false,
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",

                    },

                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",

                    },

                }]
            },
            chartArea: {
                backgroundColor: 'rgba(251, 85, 85, 0.4)'
            }
        };

        // Chart Data
        var chartData = {
            labels: ['01/02', '02/02', '03/02', '04/02', '05/02', '06/02', '07/02'],
            datasets: [{
                    label: "Tỉ lệ chốt",
                    data: [15, 16, 20, 25, 16, 20, 25],
                    borderColor: "#1EAE71",

                }, {
                    label: "Tỉ lệ chờ duyệt",
                    data: [5, 6, 2, 5, 6, 2, 5],

                    borderColor: "#FAA227",
                },
                {
                    label: "Tỉ lệ hủy",
                    data: [1, 1, 2, 5, 10, 8, 6],

                    borderColor: "#F23061",
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

        $('.shawCalRanges').daterangepicker({
            ranges: {
                'Hôm nay': [moment(), moment()],
                'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                '30 ngày trước': [moment().subtract(29, 'days'), moment()],
                'Trong tháng': [moment().startOf('month'), moment().endOf('month')],
                'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            alwaysShowCalendars: true,
            opens: 'left'
        });

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
        <div class="card card-round shadow">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title"><?php echo e(__('Tổng quan')); ?></h4>


                    </div>
                    <div class="col-md-4">
                        <div class='input-group'>
                            <input type='text' class="form-control round shawCalRanges opensleft" />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-block">
                <div class="flex overview">
                    <div class="flex-1 mr-1">
                        <div class="card-round bg-purple bg-darken-4" >
                            <h4>Tổng doanh thu</h4>
                            <h2 class="text-bold-700">10.000.000 đ </h2>
                        </div>
                    </div>
                    <div class="flex-1 mr-1">
                        <div class="card-round bg-blue bg-accent-3">
                            <h5>Tổng hoa hồng</h5>
                            <h2 class="text-bold-700">10.000.000 đ </h2>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="card-round bg-amber bg-darken-2">
                            <h5>Tỉ lệ chờ duyệt </h5>
                            <h2 class="text-bold-700">20 % </h2>
                        </div>
                    </div>
                    <div class="flex-1 ml-1">
                        <div class="card-round bg-success bg-darken-1">
                            <h5>Tỉ lệ chốt </h5>
                            <h2 class="text-bold-700">10 % </h2>
                            <p> Số đơn chốt: 10/100 </p>
                        </div>
                    </div>
                    <div class="flex-1 ml-1">
                        <div class="card-round bg-red bg-accent-2">
                            <h5>Tỉ lệ hủy </h5>
                            <h2 class="text-bold-700">10 % </h2>
                            <p> Số đơn hủy: 10/100 </p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="card card-round shadow">
            <div class="card-header">

                <div class="row">

                    <div class="col-md-8">
                        <h4 class="card-title mb-2"><?php echo e(__('Biểu đồ  chiến dịch')); ?></h4>


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
                                <span class="custom-control-description"><?php echo e(__('Tỉ lệ chốt')); ?></span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="order" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Tỉ lệ chờ duyệt')); ?></span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="cancel" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo e(__('Tỉ lệ hủy')); ?></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6 text-xs-right">

                    </div>
                </div>
                <div class="chartjs">
                    <canvas id="line-chart" height="380"></canvas>
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/auth/dropship/dashboard.blade.php ENDPATH**/ ?>
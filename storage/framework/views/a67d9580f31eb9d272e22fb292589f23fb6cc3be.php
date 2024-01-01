
<?php $__env->startPush('css'); ?>

<link href="<?php echo e(asset('theme/css/home.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $('.carousel').carousel({
        interval: 2000,
    });

</script>
<script>
    $(document).ready(function() {
        function activeTab(obj, ) {
            $('.offset-xs-3 ul li').removeClass('active');
            $(obj).addClass('active');
            var id = $(obj).find('a').attr('href');
            $('.tab-list').hide();
            $(id).show();
        }
        $('.offset-xs-3 ul li').click(function() {
            activeTab(this);
            return false;
        });
    })
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('body'); ?>
<?php echo e(session('key')); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-border']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-border']); ?>
    <?php echo $__env->make('web.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid']); ?>
    <div class="container ptb-8">
        <div class="row">
            <div class="col-md-6">
                <div class="pr-2">
                    <img loading="lazy" class="img-fluid" src="<?php echo e(asset('theme/images/home/block-1.png')); ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="pl-2 ptb-4">
                    <h2 class="text-bold-600">Tối ưu hóa chuyển đổi cho quảng cáo</h2>
                    <p>Make it easy for your team to focus on tasks currently at hand. Define each stage of work to see what’s important and where things are getting stuck.</p>

                    <a href="#" class="btn btn-primary round"> Bắt đầu sử dụng miễn phí</a>

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



<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid bg-fa']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid bg-fa']); ?>
    <div class="container ptb-8">
        <div class="content-header text-center">
            <h2><?php echo e(__("Câu chuyện thành công: Doanh nghiệp nhỏ tỏa sáng")); ?></h2>
            <p><?php echo e(__("Tùy chỉnh mẫu Landing Page hoặc thiết kế mẫu của riêng bạn")); ?></p>
        </div>
        <div class="content-body ptb-4">
            <div class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#terminal" data-slide-to="0" class="active"></li>
                    <li data-target="#terminal" data-slide-to="1"></li>
                    <li data-target="#terminal" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-6">
                            <div class="pr-2">
                                <img loading="lazy" class="img-fluid" src="/theme/images/home/terminal.png">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pl-2 pt-2">
                                <h2>Slate & Tell</h2>
                                <p>Là một cửa hàng trang sức độc lập, Slate & Tell đang tìm cách xây dựng chiến dịch quảng cáo trong các mùa bán hàng cao điểm.<br>Bằng cách tận dụng công cụ Sáng tạo "Smart Video" của TikTok Ads Manager và tối ưu chiến dịch, Slate & Tell đã tạo ra các quảng cáo hấp dẫn, tiếp cận được 4 triệu người dùng TikTok, tạo ra 1.000 lượt chuyển đổi, giúp họ đạt được mục tiêu lợi nhuận gấp 2 lần trên chi tiêu quảng cáo chỉ trong vòng 6 tháng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="pr-2">
                                <img loading="lazy" class="img-fluid" src="/theme/images/home/terminal.png">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pl-2 pt-4">
                                <h2>Slate & Tell</h2>
                                <p>Là một cửa hàng trang sức độc lập, Slate & Tell đang tìm cách xây dựng chiến dịch quảng cáo trong các mùa bán hàng cao điểm.<br>Bằng cách tận dụng công cụ Sáng tạo "Smart Video" của TikTok Ads Manager và tối ưu chiến dịch, Slate & Tell đã tạo ra các quảng cáo hấp dẫn, tiếp cận được 4 triệu người dùng TikTok, tạo ra 1.000 lượt chuyển đổi, giúp họ đạt được mục tiêu lợi nhuận gấp 2 lần trên chi tiêu quảng cáo chỉ trong vòng 6 tháng.</p>
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
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'container-fluid ptb-8']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'container-fluid ptb-8']); ?>

    <div class="container text-xs-center">
        <div class="row">
            <div class="offset-md-3 col-md-6 mb-2">
                <img class="img-fluid" src="<?php echo e(asset('theme/images/home/home-3.png')); ?>">
            </div>
        </div>
        <h2 class="text-bold-700 mb-2"> <?php echo e(__("Chỉ 5 phút thao tác có ngay Landing Page chuyển đổi vô địch")); ?></h2>

        <a href="#" class="btn btn-primary round"> <?php echo e(__("Bắt đầu sử dụng miễn phí")); ?></a>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php echo $__env->make('web.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.simple','data' => ['class' => 'vertical-layout vertical-menu fixed-navbar bg-white']]); ?>
<?php $component->withName('layout.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'vertical-layout vertical-menu fixed-navbar bg-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\www\ufala\resources\views/web/home.blade.php ENDPATH**/ ?>
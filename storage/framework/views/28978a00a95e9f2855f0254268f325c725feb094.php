<footer class="container-fluid  navbar-border">
    <div class="row pt-1">
        <div class="col-md-6">
            <ul class="pull-left nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <image class="logo" src="<?php echo e(asset('theme/images/logo/logo.png')); ?>" />
                    </a>
                </li>

                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">
                        <?php echo e(__("Quyền riêng tư")); ?>

                    </a>
                </li>

                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">
                        <?php echo e(__("Điều khoản")); ?>

                    </a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">
                        <?php echo e(__("Trợ giúp")); ?>

                    </a>
                </li>
            </ul>


        </div>
        <div class="col-md-6" id="social">


            <ul class="pull-right nav navbar-nav">

                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">
                        <?php echo e(__("Liên hệ với chúng tôi")); ?>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="#">
                        <span class="mr-1"> <?php echo e(__("Theo dõi chúng tôi")); ?> </span> 
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    
                </li>
            </ul>
        </div>
    </div>
</footer><?php /**PATH D:\www\ufala\resources\views/web/inc/footer.blade.php ENDPATH**/ ?>
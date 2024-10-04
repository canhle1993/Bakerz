<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerfresh - Cake Shop HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-4.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h1 class="breadcrumb_title">Our Chef</h1>
                    <ul class="breadcrumb_list">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Chef</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Team Section Start -->
<div class="team section-padding-03">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-n25">
            <?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Single Team start -->
            <div class="col mb-25">
                <div class="team-3-wrapper">
                <div class="team-3-thumb">
                    <img src="<?php echo e(asset('storage/' . $chef->image)); ?>" alt="<?php echo e($chef->name); ?>">
                </div>

                    <div class="team-3-content">
                        <div class="team-3-head">
                            <span class="team-3-name"><?php echo e($chef->name); ?></span>
                            <span class="team-3-designation"><?php echo e($chef->position); ?></span>
                        </div>
                        <p class="team-3-text"><?php echo nl2br(e($chef->description)); ?></p>
                        <ul class="team-3-social">
                            <li><a href="#"><i class="lastudioicon-b-facebook"></i></a></li>
                            <li><a href="#"><i class="lastudioicon-b-twitter"></i></a></li>
                            <li><a href="#"><i class="lastudioicon-b-pinterest"></i></a></li>
                            <li><a href="#"><i class="lastudioicon-b-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Team end -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><br><br>
<!-- Team Section End -->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/our-chef.blade.php ENDPATH**/ ?>
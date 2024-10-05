<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e($blog->blog_name); ?> - Blog Details</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?php echo e($blog->content1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="<?php echo e(asset('assets/images/bg/breadcrumb-bg-5.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Blog Details</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Section Start -->
    <div class="blog-sidebar blog-sidebar-right">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 section-padding-04">
                    <div class="single-blog">
                        <!-- Blog Image -->
                        <div class="single-blog-image">
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="<?php echo e($blog->blog_name); ?>">
                        </div>

                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <ul class="blog-post-two__meta">
                                <li><a href="<?php echo e(route('client.home')); ?>">Bakerz Bite</a></li>
                                <li>-</li>
                                <li><span><?php echo e(\Carbon\Carbon::parse($blog->posted_date)->format('M d, Y')); ?></span></li>
                            </ul>
                            <h2 class="single-blog-title"><?php echo e($blog->title1); ?></h2>
                            <p class="single-blog-description"><?php echo nl2br(e($blog->content1)); ?></p>
                            
                            <?php if($blog->title2): ?>
                            <h3 class="single-blog-title mt-3"><?php echo e($blog->title2); ?></h3>
                            <?php endif; ?>
                            <div class="single-blog-banner">
                                <img src="<?php echo e(asset('assets/images/blog/blog-07.jpg')); ?>" alt="Single-Blog">
                            </div>

                            <?php if($blog->content2): ?>
                            <p class="single-blog-description"><?php echo nl2br(e($blog->content2)); ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Blog Footer -->
                        <div class="single-blog-bottom">
                            <div class="col-auto">
                                <div class="single-blog-tags">
                                    <span class="label">Tags:</span>
                                    <ul>
                                        <li><a href="<?php echo e(route('client.home')); ?>">Bakerz Bite, </a></li>
                                        <li><a href="<?php echo e(route('client.blog')); ?>">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="single-blog-share">
                                    <span class="label">Share:</span>
                                    <div class="social">
                                        <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                                        <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                                        <a href="#"><i class="lastudioicon-b-pinterest"></i></a>
                                        <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Blog Details Section End -->

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- JS Vendor, Plugins & Activation Script Files -->
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        $(window).on("scroll", function (event) {
            var scroll = $(window).scrollTop();
            if (scroll <= 0) {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).removeClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo-white.svg')); ?>"
                );
            } else {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).addClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo.svg')); ?>"
                );
            }
        });
    </script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/blog/blog-pd.blade.php ENDPATH**/ ?>
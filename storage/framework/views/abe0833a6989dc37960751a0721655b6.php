<!-- blog-detail.blade.php -->
<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bakerz Bite</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
</head>

<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Shop Banner Section Start -->
    <div class="shop-banner shop-banner_bg" data-bg-image="<?php echo e(asset('assets/images/bg/home-9-bg1.jpg')); ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-8 order-lg-1 order-md-2 order-2">
                    <div class="shop-banner_one">
                        <img src="<?php echo e(asset('assets/images/banner/home9-banner1.jpg')); ?>" alt="Banner-Image" />
                        <span class="shop-banner_one__border"></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 order-lg-2 order-1">
                    <div class="shop-banner_content">
                        <!-- Section Title Start -->
                        <div class="section-title-09 justify-content-center text-center align-items-center">
                            <span class="section-title-09__subtitle">create delicious cakes with your own hands</span>
                            <h1 class="section-title-09__title text-white mb-0">Cakes</h1>
                            <form id="registerForm" method="POST" action="<?php echo e(route('workshop.register')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product" value="Cakes">
                                <a href="javascript:void(0)" class="section-title-09__btn justify-content-center" onclick="document.getElementById('registerForm').submit()">Register</a>
                            </form>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-4 order-lg-3 order-md-3 order-3">
                    <div class="shop-banner_two">
                        <img src="<?php echo e(asset('assets/images/banner/home9-banner2.png')); ?>" alt="Banner-Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Banner Section End -->

    <!-- OurMenu Section Start -->
    <div class="menu-banner" data-bg-image="<?php echo e(asset('assets/images/bg/home-9-bg2.jpg')); ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="menu-banner_image">
                        <a href="shop.html"><img src="<?php echo e(asset('assets/images/banner/home9-banner3.jpg')); ?>" alt="Banner-Image" /></a>
                        <span class="banner-name-style">2024</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-banner_content">
                        <div class="section-title-09 justify-content-start text-start align-items-start">
                            <span class="section-title-09__subtitle">create delicious cakes with your own hands</span>
                            <h1 class="section-title-09__title text-white">Sweet Breads</h1>
                            <p class="section-title-09__text text-white">
                                Sweet breads are soft, mildly sweet baked goods made with enriched dough, often flavored with cinnamon, fruits, or nuts, perfect for breakfast or dessert.
                            </p>
                            <form id="registerForm1" method="POST" action="<?php echo e(route('workshop.register')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product" value="Sweet Breads">
                                <a href="javascript:void(0)" class="section-title-09__btn justify-content-center" onclick="document.getElementById('registerForm1').submit()">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OurMenu Section End -->

    <!-- Gift Banner Section Start -->
    <div class="gift-banner section-padding-03" data-bg-image="<?php echo e(asset('assets/images/bg/home-9-bg3.jpg')); ?>">
        <div class="container h-100">
            <div class="row justify-content-end align-items-center h-100">
                <div class="col-sm-8 col-md-7 col-lg-6">
                    <div class="section-title-09 justify-content-start text-center align-items-center">
                        <span class="section-title-09__subtitle">create delicious cakes with your own hands</span>
                        <h1 class="section-title-09__title text-dark">Cheesecakes</h1>
                        <p class="section-title-09__text text-dark">
                            Cheesecakes are rich, creamy desserts made with a smooth mixture of cream cheese, eggs, and sugar, typically on a crunchy crust. They come in various flavors, such as vanilla, chocolate, or fruit, and are beloved worldwide.
                        </p>
                        <form id="registerForm2" method="POST" action="<?php echo e(route('workshop.register')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product" value="Cheesecakes">
                            <a href="javascript:void(0)" class="section-title-09__btn btn_black justify-content-center" onclick="document.getElementById('registerForm2').submit()">Register</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gift Banner Section End -->

    <!-- Portfolio Banner Section Start -->
    <div class="portfolio-banner section-padding-03" data-bg-image="<?php echo e(asset('assets/images/bg/home-9-bg2.jpg')); ?>">
        <div class="container">
            <div class="row mb-n60">
                <div class="col-md-5 mb-60">
                    <div class="section-title-09">
                        <span class="section-title-09__subtitle mb-3">create delicious cakes with your own hands</span>
                        <h1 class="section-title-09__title text-white mb-0">Baked Goods</h1>
                        <form id="registerForm3" method="POST" action="<?php echo e(route('workshop.register')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product" value="Baked Goods">
                            <a href="javascript:void(0)" class="section-title-09__btn justify-content-center" onclick="document.getElementById('registerForm3').submit()">Register</a>
                            </form>
                    </div>
                </div>
                <div class="col-md-7 mb-60 mt-8 mt-md-0">
                    <div class="portfolio-banner_image">
                        <a class="portfolio-banner_image__thumb" href="shop.html">
                            <img src="<?php echo e(asset('assets/images/banner/home9-banner4.jpg')); ?>" alt="Banner-Image" />
                        </a>
                        <span class="banner-name-style-2">Bakerz Bite</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Banner Section End -->
    <div class="quickview-product-modal modal fade" id="modalWorkShop">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> <span> Workshop Register Successfully!</span>
                </div>
            </div>
        </div>
    </div>
<!-- ERROR -->
    <div class="quickview-product-modal modal fade"  id="notRegister" style="z-index: 1050 !important ;">
    <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="fas fa-exclamation-triangle"></i> <span id="errorMessage"> <?php echo e(session('iserror')); ?> </span>
                </div>
            </div>
        </div>
</div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- JS Vendor, Plugins & Activation Script Files -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.7.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var check = "<?php echo e(session('isdone') ? 'true' : 'false'); ?>";
        if (check === 'true') {
            var myModal = new bootstrap.Modal(document.getElementById('modalWorkShop'));
            myModal.show();
            
            // Gửi yêu cầu AJAX đến backend để xóa session 'success'
            fetch('<?php echo e(route("session.clearSuccess")); ?>')
                .then(response => response.json())
                .then(data => {
                    console.log('Session cleared');
                });
        }
        var error = "<?php echo e(session('iserror') ? 'true' : 'false'); ?>";
        if (error === 'true') {
            var myModal = new bootstrap.Modal(document.getElementById('notRegister'));
            myModal.show();
            
            // Gửi yêu cầu AJAX đến backend để xóa session 'success'
            fetch('<?php echo e(route("session.clearSuccess")); ?>')
                .then(response => response.json())
                .then(data => {
                    console.log('Session cleared');
                });
        }
    });
    </script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/blog/blog-detail.blade.php ENDPATH**/ ?>
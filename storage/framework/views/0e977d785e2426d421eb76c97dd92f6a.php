<!-- resources/views/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Bakerz Bite</title>

        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

        <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

        <!-- Font CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

        <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/lastudioicons.css">
        <link rel="stylesheet" href="assets/css/vendor/dliconoutline.css">

        <!-- Plugins CSS (All Plugins Files) -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/lightgallery-bundle.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
<body>

    <!-- Include header -->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content section -->
    <main>
        <?php echo $__env->yieldContent('content'); ?> <!-- Đây là nơi nội dung sẽ được nhúng từ các trang con -->
    </main>

    <!-- Include footer -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/layouts/main.blade.php ENDPATH**/ ?>
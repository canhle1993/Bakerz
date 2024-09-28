<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <!-- Thêm các link đến file CSS của bạn -->
    <link href="<?php echo e(asset('darkpan-1.0.0/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('darkpan-1.0.0/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Nếu bạn có file header cho trang admin -->
    </header>

    <!-- Content -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?> <!-- Phần nội dung sẽ thay đổi tùy từng view -->
    </div>

    <!-- Footer -->
    <footer>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Nếu bạn có file footer cho trang admin -->
    </footer>

    <!-- Thêm các link đến file JavaScript của bạn -->
    <script src="<?php echo e(asset('darkpan-1.0.0/js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\baker-bite\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
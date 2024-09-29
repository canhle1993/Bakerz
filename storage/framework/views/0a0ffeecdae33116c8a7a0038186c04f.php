<!-- resources/views/client/filter.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Products</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>

    <!-- Hiển thị danh mục sức khỏe -->
    <h2>Danh mục sức khỏe</h2>
    <ul>
        <?php $__currentLoopData = $heathyCatalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($catalog->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <!-- Hiển thị danh sách sản phẩm -->
    <h2>Sản phẩm</h2>
    <ul>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($product->product_name); ?> - $<?php echo e(number_format($product->price, 2)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <!-- Hiển thị sản phẩm có giảm giá -->
    <h2>Sản phẩm giảm giá</h2>
    <ul>
        <?php $__currentLoopData = $discount_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discountProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($discountProduct->product_name); ?> - Giá đã giảm: $<?php echo e(number_format($discountProduct->getDiscountedPrice(), 2)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\baker-bite\resources\views/client/filter.blade.php ENDPATH**/ ?>
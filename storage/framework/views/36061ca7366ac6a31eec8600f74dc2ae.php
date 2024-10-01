<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakerz Bite</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .image-slideeerrr {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slideeerrr-wrapper {
            display: flex;
            width: calc(10 * 300px); /* 5 ảnh gốc + 5 ảnh lặp lại */
            animation: slideee 40s linear infinite;
        }

        .slideee {
            position: relative;
            flex: 0 0 300px; /* Mỗi border chứa ảnh có kích thước tối đa 300x300 */
            max-width: 300px;
            max-height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .slideee img {
            max-width: 100%;
            max-height: 100%;
            display: block;
        }

        /* Nút button đặt trên ảnh */
        .slideee button {
            position: absolute;
            bottom: 10px; /* Gần cuối ảnh */
            left: 50%;
            width: 200px;
            transform: translateX(-50%);
            padding: 8px 16px;
            background-color: #e84e0091;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .slideee button:hover {
            background-color: #4c1101db;
        }

        @keyframes slideee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-1500px); } /* Dịch chuyển toàn bộ 5 ảnh (300px * 5) */
        }

        /* Animation paused khi hover vào */
        .paused {
            animation-play-state: paused !important;
        }
    </style>
</head>
<body>
    <div class="image-slideeerrr">
        <div class="slideeerrr-wrapper" id="slideeerrr-wrapper">
            <?php if($coffeProducts->isEmpty()): ?>
            <p>No Coffee found.</p>
            <?php else: ?> <?php $__currentLoopData = $coffeProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Tạo 5 ảnh gốc với nút button -->
            <div class="slideee">
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>"><img src="<?php echo e($product->image ? asset('storage/products/' . $product->image) : asset('path/to/default-image.jpg')); ?>" alt="<?php echo e($product->product_name); ?>"></a>
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>">
                <button><?php echo e($product->product_name); ?><br><span>
                <?php if($product->price != $product->getDiscountedPrice()): ?>
                <del><?php echo e(formatPriceVND($product->price)); ?></del>
                <!-- Giá gốc -->
                <strong
                ><?php echo e(formatPriceVND($product->getDiscountedPrice())); ?></strong
                >
                <!-- Giá sau khi giảm -->
                <?php else: ?> <?php echo e(formatPriceVND($product->price)); ?>

                <!-- Giá không giảm -->
                <?php endif; ?>
                </span></button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
            <!-- <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 2">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 3">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 4">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 5">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div> -->
            

            <!-- Tạo thêm 5 ảnh lặp lại với nút button -->
            <?php if($coffeProducts->isEmpty()): ?>
            <p>No Coffee found.</p>
            <?php else: ?> <?php $__currentLoopData = $coffeProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slideee">
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>"><img src="<?php echo e($product->image ? asset('storage/products/' . $product->image) : asset('path/to/default-image.jpg')); ?>" alt="<?php echo e($product->product_name); ?>"></a>
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>">
                <button>
                <?php echo e($product->product_name); ?><br><span>
                <?php if($product->price != $product->getDiscountedPrice()): ?>
                <del><?php echo e(formatPriceVND($product->price)); ?></del>
                <!-- Giá gốc -->
                <strong
                ><?php echo e(formatPriceVND($product->getDiscountedPrice())); ?></strong
                >
                <!-- Giá sau khi giảm -->
                <?php else: ?> <?php echo e(formatPriceVND($product->price)); ?>

                <!-- Giá không giảm -->
                <?php endif; ?>
            </span></button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
            <!-- <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 7">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 8">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 9">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div>
            <div class="slideee">
                <img src="img/a1.png" alt="Ảnh 10">
                <button>Iced Caramel Macchiato<br><span>$5</span></button>
            </div> -->
        </div>
    </div>

    <script>
        const slideeerrrWrapper = document.getElementById('slideeerrr-wrapper');

        // Khi di chuột vào slideeerrr
        slideeerrrWrapper.addEventListener('mouseover', () => {
            slideeerrrWrapper.classList.add('paused');
        });

        // Khi di chuột ra khỏi slideeerrr
        slideeerrrWrapper.addEventListener('mouseout', () => {
            slideeerrrWrapper.classList.remove('paused');
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ProjectBaker\resources\views/layouts/autoplay.blade.php ENDPATH**/ ?>
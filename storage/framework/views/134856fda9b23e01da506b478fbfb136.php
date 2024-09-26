<!-- resources/views/search-results.blade.php -->
 <!-- Kế thừa từ layout 'main.blade.php' -->

<?php $__env->startSection('title', 'Search Results'); ?> <!-- Tùy chỉnh tiêu đề trang -->

<?php $__env->startSection('content'); ?>
    <h2>Search results for "<?php echo e($query); ?>"</h2>

    <?php if($results->isEmpty()): ?>
        <p>No results found.</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($result->product_name); ?> - <?php echo e($result->price); ?> VND</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/client/search-results.blade.php ENDPATH**/ ?>
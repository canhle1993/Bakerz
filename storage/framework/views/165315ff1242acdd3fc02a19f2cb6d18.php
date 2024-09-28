

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h2 class="mb-4">Quản lý đánh giá và bình luận</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Thời gian đánh giá</th>
                <th>Trả lời</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('storage/avatars/' . $review->user->avatar)); ?>" alt="Avatar" style="width: 50px; height: 50px;" class="rounded-circle"></td>
                    <td><?php echo e($review->user->name); ?></td>
                    <td><?php echo e($review->user->email); ?></td>
                    <td><?php echo e($review->user->phone); ?></td>
                    <td><?php echo e($review->ratestar); ?> / 5</td>
                    <td><?php echo e($review->comment); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($review->CreatedDate)->format('d/m/Y H:i:s')); ?></td>
                    <td><a href="#" class="btn btn-primary">Trả lời</a></td>
                    <td>
                        <form action="<?php echo e(route('reviews.delete', ['id' => $review->ID])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baker-bite\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>
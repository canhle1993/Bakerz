

<?php $__env->startSection('manage_admin'); ?>
<div class="container-fluid">
    <h2 class="mb-4">Quản lý đánh giá và bình luận</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Thời gian đánh giá</th>
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

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/reviews/manage.blade.php ENDPATH**/ ?>
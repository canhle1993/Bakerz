

<?php $__env->startSection('workshop_content'); ?>
<div class="container mt-5">
    <h1>Workshop Management</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
<!-- Form tìm kiếm -->
    
    <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form action="<?php echo e(route('admin.workshop.index')); ?>" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by name or product" value="<?php echo e(request()->query('search')); ?>">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.workshop.index')); ?>" class="btn btn-light">Reset</a> <!-- Sửa route -->
            </div>
        </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('storage/avatars/' . $workshop->user->avatar)); ?>" alt="Avatar" class="rounded-circle" width="50" height="50"></td>
                    <td><?php echo e($workshop->user->name); ?></td>
                    <td><?php echo e($workshop->user->email); ?></td>
                    <td><?php echo e($workshop->user->phone); ?></td>
                    <td><?php echo e($workshop->user->address); ?></td>
                    <td><?php echo e($workshop->product); ?></td>
                    <td>
                        <?php if($workshop->status == 'Approved'): ?>
                            <span class="badge bg-success"><?php echo e($workshop->status); ?></span>
                        <?php elseif($workshop->status == 'Cancelled'): ?>
                            <span class="badge bg-danger"><?php echo e($workshop->status); ?></span>
                        <?php else: ?>
                            <span class="badge bg-warning">Pending</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($workshop->status == 'Pending'): ?>
                            <!-- Phê duyệt đăng ký -->
                            <form action="<?php echo e(route('admin.workshop.approve', ['id' => $workshop->workshop_id])); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>

                            <!-- Hủy đăng ký -->
                            <form action="<?php echo e(route('admin.workshop.cancel', ['id' => $workshop->workshop_id])); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-warning btn-sm">Cancel</button>
                            </form>
                        <?php endif; ?>

                        <!-- Xóa đăng ký -->
                        <form action="<?php echo e(route('admin.workshop.delete', ['id' => $workshop->workshop_id])); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Phân trang -->
    <div class="d-flex justify-content-center">
        <?php echo e($workshops->appends(request()->query())->links('pagination::bootstrap-4')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/workshop.blade.php ENDPATH**/ ?>
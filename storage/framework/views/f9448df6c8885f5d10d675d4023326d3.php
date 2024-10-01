<?php $__env->startSection('manage_blacklist'); ?>
<style>
.pagination {
    display: flex;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination .page-item {
    margin: 0 5px;
}

.pagination .page-link {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #171718;
    background-color: #fff;
    border: 1px solid #dee2e6;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.pagination .page-link:hover {
    z-index: 2;
    color: #fff;
    background-color: #f01717;
    border-color: #ff1100;
}

.pagination .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #ec0909;
    border-color: #e90611;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination .page-link:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.pagination .page-link:hover {
    transform: scale(1.1);
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Restore button */
.btn-restore {
    background-color: #28a745;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-restore:hover {
    background-color: #218838;
    box-shadow: 0px 4px 10px rgba(33, 136, 56, 0.5);
    transform: scale(1.05);
}

.custom-alert {
    position: fixed;
    top: 10%;
    left: 50%;
    right: 10%;
    transform: translate(-50%, -50%);
    background-color: #4CAF50;
    color: white;
    padding: 15px 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    opacity: 0;
    transform: translate(-50%, -50%) scale(0.9);
    transition: all 0.5s ease-in-out;
}

.custom-alert.show {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

.custom-alert .close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    position: absolute;
    right: 10px;
    top: 5px;
    cursor: pointer;
}

.custom-alert .close-btn:hover {
    color: #ddd;
}

 /* Delete button */
 .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-danger:hover {
        background-color: #c82333;
        box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5);
        transform: scale(1.05);
    }
</style>

<?php if(session('success')): ?>
    <div id="custom-alert" class="custom-alert">
        <?php echo e(session('success')); ?>

        <button class="close-btn" onclick="closeAlert()">×</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('custom-alert');
            alert.classList.add('show');

            setTimeout(function () {
                closeAlert();
            }, 5000);
        });

        function closeAlert() {
            const alert = document.getElementById('custom-alert');
            alert.classList.remove('show');
            setTimeout(function () {
                alert.remove();
            }, 500);
        }
    </script>
<?php endif; ?>

<div class="container mt-5">
    <div class="p-4 rounded shadow-lg mb-5" style="background: linear-gradient(45deg, #ff9a9e, #fad0c4); border: 1px solid #ff6f91;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-dark">Blacklisted Users</h1>
    </div>

    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blacklistedUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center">
                    <?php if($user->avatar): ?>
                        <?php if(filter_var($user->avatar, FILTER_VALIDATE_URL)): ?>
                            <img src="<?php echo e($user->avatar); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/avatars/'.$user->avatar)); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php endif; ?>
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/avatars/default-avatar.png')); ?>" alt="default avatar" class="rounded-circle" width="50" height="50">
                    <?php endif; ?>
                </td>

                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e($user->address); ?></td>
                <td><?php echo e($user->note); ?></td>

                <td class="text-center">
                    <!-- Button to restore user -->
                    <form action="<?php echo e(route('blacklist.restore', $user->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-restore">
                            <i class="bi bi-arrow-up-circle"></i> Restore
                        </button>
                    </form>
                     <!-- Button to delete product -->
    <form action="<?php echo e(route('product.delete', $product->product_id)); ?>" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this product permanently?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-sm btn-danger">
            <i class="bi bi-trash"></i> Delete
        </button>
    </form>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($blacklistedUsers->links('pagination::bootstrap-5')); ?>

    </div>
    </div>



    

    <div class="p-4 rounded shadow-lg mb-5" style="background: linear-gradient(45deg, #a1c4fd, #c2e9fb); border: 1px solid #007bff;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-dark">Deleted Products</h1>
        </div>

        <table class="table table-hover table-bordered table-striped shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Categories</th> <!-- Nhiều danh mục -->
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $deletedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Hình ảnh" width="100" class="mt-2">
                    </td>
                    <td><?php echo e($product->product_name); ?></td>
                    <td>
                        <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($catalog->category_name); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->describe); ?></td>

                    <td class="text-center">
                        <!-- Button to restore product -->
                        <form action="<?php echo e(route('product.restore', $product->product_id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-restore">
                                <i class="bi bi-arrow-up-circle"></i> Restore
                            </button>
                        </form>
                         <!-- Button to delete product -->
    <form action="<?php echo e(route('product.delete', $product->product_id)); ?>" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this product permanently?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-sm btn-danger">
            <i class="bi bi-trash"></i> Delete
        </button>
    </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($deletedProducts->links('pagination::bootstrap-5')); ?>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/manage-blacklist.blade.php ENDPATH**/ ?>
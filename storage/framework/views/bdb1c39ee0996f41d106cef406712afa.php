

<?php $__env->startSection('coming_soon_content'); ?>
<div class="container mt-4">
    <!-- Nút thêm sản phẩm sắp ra mắt -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addComingSoonModal">Add Product</button>

    <!-- Bảng danh sách sản phẩm sắp ra mắt -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Release date</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $coming_soon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>" width="100"></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->release_date); ?></td>
                <td>$<?php echo e(number_format($item->price, 2)); ?></td>
                <td>
                    <!-- Nút sửa -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editComingSoonModal<?php echo e($item->coming_soon_id); ?>">Edit</button>
                    <!-- Nút xóa -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteComingSoonModal<?php echo e($item->coming_soon_id); ?>">Delete</button>
                </td>
            </tr>

            <!-- Modal sửa sản phẩm -->
            <div class="modal fade" id="editComingSoonModal<?php echo e($item->coming_soon_id); ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form action="<?php echo e(route('admin.coming_soon.update', $item->coming_soon_id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e($item->name); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>" width="100" class="mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="release_date">Release date</label>
                                    <input type="date" class="form-control" name="release_date" value="<?php echo e($item->release_date); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" value="<?php echo e($item->price); ?>" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_id">Product</label>
                                    <select class="form-control" name="product_id" required>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->product_id); ?>" <?php echo e($item->product_id == $product->product_id ? 'selected' : ''); ?>><?php echo e($product->product_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal xóa sản phẩm -->
            <div class="modal fade" id="deleteComingSoonModal<?php echo e($item->coming_soon_id); ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form action="<?php echo e(route('admin.coming_soon.destroy', $item->coming_soon_id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                            Are you sure you want to remove this product?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<!-- Modal thêm sản phẩm sắp ra mắt -->
<div class="modal fade" id="addComingSoonModal" tabindex="-1" aria-labelledby="addComingSoonLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo e(route('admin.coming_soon.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addComingSoonLabel">Add Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="release_date">Release date</label>
                        <input type="date" class="form-control" name="release_date" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_id">Product</label>
                        <select class="form-control" name="product_id" required>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->product_id); ?>"><?php echo e($product->product_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/coming_soon.blade.php ENDPATH**/ ?>
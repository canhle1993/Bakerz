

<?php $__env->startSection('deal_of_the_day_content'); ?>
<div class="container mt-4">
    <!-- Nút thêm deal -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addDealModal">Thêm Deal</button>

    <!-- Bảng danh sách Deal -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên</th>
                <th>Ngày khuyến mãi</th>
                <th>Giá tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e(asset('storage/' . $deal->image)); ?>" alt="<?php echo e($deal->name); ?>" width="100"></td>
                <td><?php echo e($deal->name); ?></td>
                <td><?php echo e($deal->promotion_date); ?></td>
                <td>$<?php echo e(number_format($deal->price, 2)); ?></td>
                <td>
                    <!-- Nút sửa -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDealModal<?php echo e($deal->deal_id); ?>">Sửa</button>
                    <!-- Nút xóa -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDealModal<?php echo e($deal->deal_id); ?>">Xóa</button>
                </td>
            </tr>

            <!-- Modal sửa deal -->
            <div class="modal fade" id="editDealModal<?php echo e($deal->deal_id); ?>" tabindex="-1" >
                <div class="modal-dialog">
                    <form action="<?php echo e(route('admin.deal.update', $deal->deal_id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editDealLabel">Sửa Deal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Tên Deal</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e($deal->name); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="<?php echo e(asset('storage/' . $deal->image)); ?>" alt="<?php echo e($deal->name); ?>" width="100" class="mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="promotion_date">Ngày khuyến mãi</label>
                                    <input type="date" class="form-control" name="promotion_date" value="<?php echo e($deal->promotion_date); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input type="number" class="form-control" name="price" value="<?php echo e($deal->price); ?>" step="0.01" required>
                                    </div>
                                <div class="form-group">
                                    <label for="product_id">Sản phẩm</label>
                                    <select class="form-control" name="product_id" required>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->product_id); ?>" <?php echo e($deal->product_id == $product->product_id ? 'selected' : ''); ?>><?php echo e($product->product_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal xóa deal -->
            <div class="modal fade" id="deleteDealModal<?php echo e($deal->deal_id); ?>" tabindex="-1" aria-labelledby="deleteDealLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="<?php echo e(route('admin.deal.destroy', $deal->deal_id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteDealLabel">Xóa Deal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa deal này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<!-- Modal thêm deal -->
<div class="modal fade" id="addDealModal" tabindex="-1" aria-labelledby="addDealLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo e(route('admin.deal.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDealLabel">Thêm Deal Mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên Deal</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="promotion_date">Ngày khuyến mãi</label>
                        <input type="date" class="form-control" name="promotion_date" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_id">Sản phẩm</label>
                        <select class="form-control" name="product_id" required>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->product_id); ?>"><?php echo e($product->product_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Thêm Deal</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/deal_of_the_day.blade.php ENDPATH**/ ?>
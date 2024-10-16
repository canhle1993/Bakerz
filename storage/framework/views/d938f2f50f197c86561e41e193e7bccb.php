<style>
    .btn-secondary {
       background-color: #6c757d !important;
       color: white !important;
       font-weight: bold !important;
       padding: 10px 20px !important;
       border-radius: 5px !important;
       border: none !important;
       transition: all 0.3s ease !important;
   }

   .table {
       border-collapse: separate !important;
       border-spacing: 0 15px !important;
       background-color: #fff !important;
       box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
       border-radius: 10px !important;
   }

   .table thead th {
       background-color: #BC8157 !important;
       color: white !important;
       font-weight: bold !important;
       padding: 12px 15px !important;
       text-align: center!important;
   }

   .table tbody tr {
       background-color: #f9f9f9!important;
       transition: background-color 0.3s ease !important;
   }

   .table tbody tr:hover {
       background-color: #e9ecef!important;
   }

   .table td {
       padding: 12px 15px!important;
       text-align: center!important;
   }
   .btn:hover {
       background-color: #0056b3; /* Màu xanh dương đậm hơn khi hover */
   }

   .btn:hover {
        background-color: #0056b3 !important;
    }
</style>

<?php $__env->startSection('deal_of_the_day_content'); ?>
<div class="container mt-4">
    <h1 style="color: #BC8157;
    font-size: 3rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    margin: 30px 0;
    text-align: center;
    line-height: 1.2;
    padding: 15px;
    border: 4px dashed #BC8157;
    background-color: rgba(230, 247, 255, 0.7);
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Thêm đổ bóng cho toàn bộ box */">
Deal of The Day
</h1>
    <!-- Nút thêm deal -->
    <button class="btn mb-3" data-bs-toggle="modal" data-bs-target="#addDealModal" style="background-color: #0fa7bf; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
        Add Deal
    </button>

    <!-- Bảng danh sách Deal -->
    <table class="table table-bordered" style="margin-bottom: 270px !important;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Promotion date</th>
                <th>Price</th>
                <th>Action</th>
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
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDealModal<?php echo e($deal->deal_id); ?>">Edit</button>
                    <!-- Nút xóa -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDealModal<?php echo e($deal->deal_id); ?>">Delete</button>
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
                                <h5 class="modal-title" id="editDealLabel">Edit Deal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e($deal->name); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="<?php echo e(asset('storage/' . $deal->image)); ?>" alt="<?php echo e($deal->name); ?>" width="100" class="mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="promotion_date">Promotion date</label>
                                    <input type="date" class="form-control" name="promotion_date" value="<?php echo e($deal->promotion_date); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" value="<?php echo e($deal->price); ?>" step="0.01" required>
                                    </div>
                                <div class="form-group">
                                    <label for="product_id">Product</label>
                                    <select class="form-control" name="product_id" required>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->product_id); ?>" <?php echo e($deal->product_id == $product->product_id ? 'selected' : ''); ?>><?php echo e($product->product_name); ?></option>
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

            <!-- Modal xóa deal -->
            <div class="modal fade" id="deleteDealModal<?php echo e($deal->deal_id); ?>" tabindex="-1" aria-labelledby="deleteDealLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="<?php echo e(route('admin.deal.destroy', $deal->deal_id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteDealLabel">Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Are you sure you want to delete this deal?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
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
                    <h5 class="modal-title" id="addDealLabel">Add New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <label for="promotion_date">Promotion date</label>
                        <input type="date" class="form-control" name="promotion_date" required>
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
                    <button type="submit" class="btn" style="background-color: #ffc107; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/deal_of_the_day.blade.php ENDPATH**/ ?>
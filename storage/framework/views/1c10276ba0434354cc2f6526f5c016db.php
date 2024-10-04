 <!-- Kế thừa từ layout dashboard -->

<?php $__env->startSection('admin_content'); ?> <!-- Thêm nội dung vào section -->
    <div class="container mt-5">
        <h1>Chỉnh sửa Chef: <?php echo e($chef->name); ?></h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('admin.chefs.update', $chef->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="name" class="form-label">Tên Chef</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name', $chef->name)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Chức Vụ</label>
                <input type="text" name="position" class="form-control" id="position" value="<?php echo e(old('position', $chef->position)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Mô Tả</label>
                <textarea name="description" class="form-control" id="description" rows="4" required><?php echo e(old('description', $chef->description)); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Hình Ảnh</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
                <img src="<?php echo e(asset('storage/' . $chef->image)); ?>" alt="<?php echo e($chef->name); ?>" width="150" class="mt-3">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật Chef</button>
        </form>
    </div>
<?php $__env->stopSection(); ?> <!-- Kết thúc section -->

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/edit-chef.blade.php ENDPATH**/ ?>
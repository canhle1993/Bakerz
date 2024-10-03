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
                        <!-- Nút Xem -->
                        <button class="btn btn-info" onclick="toggleView('<?php echo e($review->ID); ?>')">Xem</button>                       
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-primary" onclick="toggleReplyForm('<?php echo e($review->ID); ?>')">Trả lời</button>    
                        <!-- Nút Xóa -->
                        <form action="<?php echo e(route('reviews.delete', ['id' => $review->ID])); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>          
                    </td>
                </tr>

                <!-- Form Trả Lời Nằm Riêng Một Hàng -->
                <tr>
                    <td colspan="8">
                        <div id="reply-form-<?php echo e($review->ID); ?>" style="display:none; margin-top:10px;">
                            <form action="<?php echo e(route('reviews.reply', ['id' => $review->ID])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <textarea name="reply" class="form-control mb-2" placeholder="Nhập câu trả lời"></textarea>
                                <button type="submit" class="btn btn-success">Gửi trả lời</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- Bảng Hiển Thị Thông Tin Nằm Riêng Một Hàng -->
                <tr>
                    <td colspan="8">
                        <div id="view-info-<?php echo e($review->ID); ?>" style="display:none;">
                        <span><strong class="text-warning">Tên bánh:</strong> <?php echo e($review->product->product_name); ?></span>
                        <span><strong class="text-warning"> <span class="text-danger">|</span> Danh mục bánh:</strong>
                            <?php $__currentLoopData = $review->product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($catalog->category_name); ?><?php echo e(!$loop->last ? ', ' : ''); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <span class="text-danger">|</span>
                            <a href="<?php echo e(route('product.single', ['product' => $review->product->product_id])); ?>#comment-<?php echo e($review->ID); ?>" class="btn btn-primary btn-sm">Xem comment</a>
                        </span>
                        </div>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<script>
    function toggleReplyForm(id) {
        var replyForm = document.getElementById('reply-form-' + id);
        replyForm.style.display = (replyForm.style.display === 'none' || replyForm.style.display === '') ? 'block' : 'none';
    }

    function toggleView(id) {
        var viewDiv = document.getElementById('view-info-' + id);
        viewDiv.style.display = (viewDiv.style.display === 'none' || viewDiv.style.display === '') ? 'block' : 'none';
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectBaker\resources\views/admin/reviews/manage.blade.php ENDPATH**/ ?>
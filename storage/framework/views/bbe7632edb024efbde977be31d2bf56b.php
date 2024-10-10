

<?php $__env->startSection('manage_admin'); ?>
<div class="container-fluid">
    <h2 class="mb-4">Manage reviews and comments</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Form tìm kiếm theo name và rating -->
    <form class="mb-4" method="GET" action="<?php echo e(route('admin.reviews.manage')); ?>">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="searchName" class="form-control" placeholder="Search by name" value="<?php echo e(request()->query('searchName')); ?>">
            </div>
            <div class="col-md-3">
                <select name="searchRating" class="form-control">
                    <option value="">Filter by Rating</option>
                    <option value="5" <?php echo e(request()->query('searchRating') == '5' ? 'selected' : ''); ?>>5 Stars</option>
                    <option value="4" <?php echo e(request()->query('searchRating') == '4' ? 'selected' : ''); ?>>4 Stars</option>
                    <option value="3" <?php echo e(request()->query('searchRating') == '3' ? 'selected' : ''); ?>>3 Stars</option>
                    <option value="2" <?php echo e(request()->query('searchRating') == '2' ? 'selected' : ''); ?>>2 Stars</option>
                    <option value="1" <?php echo e(request()->query('searchRating') == '1' ? 'selected' : ''); ?>>1 Star</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="col-md-2">
                <a href="<?php echo e(route('admin.reviews.manage')); ?>" class="btn btn-light">Reset</a>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Evaluation time</th>
                <th style="width: 230px;">Action</th>
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
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal" data-id="<?php echo e($review->ID); ?>" data-product="<?php echo e($review->product->product_name); ?>" data-category="<?php echo e($review->product->catalogs->pluck('category_name')->join(', ')); ?>">View</button>
                       
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#replyModal" data-id="<?php echo e($review->ID); ?>">Reply</button>    
                        
                        <!-- Nút Xóa -->
                        <form action="<?php echo e(route('reviews.delete', ['id' => $review->ID])); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>          
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    <?php echo e($reviews->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

</div>

<!-- Modal Form Trả Lời -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="replyModalLabel">Reply to Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="replyForm" action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <textarea name="reply" class="form-control" rows="5" placeholder="Nhập câu trả lời"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Bảng Hiển Thị Thông Tin -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View Review Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong class="text-warning">Cake name:</strong> <span id="viewProduct"></span></p>
                <p><strong class="text-warning">Cake category:</strong> <span id="viewCategory"></span></p>
                <p><a href="#" id="viewCommentLink" class="btn btn-primary btn-sm">View comment</a></p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var replyModal = document.getElementById('replyModal');
        replyModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var reviewId = button.getAttribute('data-id');
            
            // Cập nhật action form với URL động
            var form = replyModal.querySelector('form');
            form.action = "<?php echo e(route('reviews.reply', '')); ?>/" + reviewId;
        });

        var viewModal = document.getElementById('viewModal');
        viewModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var productName = button.getAttribute('data-product');
            var productCategory = button.getAttribute('data-category');
            var reviewId = button.getAttribute('data-id');

            // Đặt dữ liệu vào modal
            document.getElementById('viewProduct').textContent = productName;
            document.getElementById('viewCategory').textContent = productCategory;

            // Cập nhật đường dẫn đến comment
            var commentLink = document.getElementById('viewCommentLink');
            commentLink.href = "<?php echo e(route('product.single', '')); ?>/" + reviewId + "#comment-" + reviewId;
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/reviews/manage.blade.php ENDPATH**/ ?>
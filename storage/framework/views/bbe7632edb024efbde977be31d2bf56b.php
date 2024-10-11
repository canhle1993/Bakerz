

<?php $__env->startSection('manage_admin'); ?>
<div class="container-fluid">
    <h2 class="mb-4">Quản lý đánh giá và bình luận</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Form tìm kiếm theo tên và số sao đánh giá -->
    <form class="mb-4" method="GET" action="<?php echo e(route('admin.reviews.manage')); ?>">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="searchName" class="form-control" placeholder="Search by user name" value="<?php echo e(request()->query('searchName')); ?>">
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
                <!-- Nút Reset -->
                <a href="<?php echo e(route('admin.reviews.manage')); ?>" class="btn btn-secondary">Reset</a>
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
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal-<?php echo e($review->ID); ?>">View</button>
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#replyModal-<?php echo e($review->ID); ?>">Reply</button>
                        <!-- Nút Xóa -->
                        <form action="<?php echo e(route('reviews.delete', ['id' => $review->ID])); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>          
                    </td>
                </tr>

                <!-- Modal for Reply -->
                <div class="modal fade" id="replyModal-<?php echo e($review->ID); ?>" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="replyModalLabel">Reply to Review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php echo e(route('reviews.reply', ['id' => $review->ID])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <textarea name="reply" class="form-control mb-2" placeholder="Nhập câu trả lời"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal for Viewing Information -->
                <div class="modal fade" id="viewModal-<?php echo e($review->ID); ?>" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel">View Review Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong class="text-warning">Cake name:</strong> <?php echo e($review->product->product_name); ?></p>
                                <p><strong class="text-warning">Cake category:</strong>
                                    <?php $__currentLoopData = $review->product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($catalog->category_name); ?><?php echo e(!$loop->last ? ', ' : ''); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <a href="<?php echo e(route('product.single', ['product' => $review->product->product_id])); ?>#comment-<?php echo e($review->ID); ?>" class="btn btn-primary btn-sm">View comment</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div style="height: 20px;"></div>
<div class="d-flex justify-content-center">
    <?php echo e($reviews->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/reviews/manage.blade.php ENDPATH**/ ?>
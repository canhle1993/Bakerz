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
       background-color: #0056b3 !important;
   }
</style>

<?php $__env->startSection('manage_admin'); ?>
<div class="container-fluid">
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
 Manage Reviews and Comments
</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row mb-4">
        <div class="col-md-8 offset-md-2">
            <form method="GET" action="<?php echo e(route('admin.reviews.manage')); ?>" class="input-group">
                <!-- Tìm kiếm theo tên người dùng -->
                <input type="text" name="searchName" class="form-control bg-white border-0 ps-3" placeholder="Search by user name" value="<?php echo e(request()->query('searchName')); ?>" style="border-radius: 25px 0 0 25px;">


                <select name="searchRating" class="form-control" style="width: 150px !important; border-radius: 0 !important; padding: 5px 10px !important; background-color: #f8f9fa !important; border: 1px solid #ced4da !important; font-size: 14px !important;">
                    <option value="">Filter by Rating</option>
                    <option value="5" <?php echo e(request()->query('searchRating') == '5' ? 'selected' : ''); ?>>5 Stars</option>
                    <option value="4" <?php echo e(request()->query('searchRating') == '4' ? 'selected' : ''); ?>>4 Stars</option>
                    <option value="3" <?php echo e(request()->query('searchRating') == '3' ? 'selected' : ''); ?>>3 Stars</option>
                    <option value="2" <?php echo e(request()->query('searchRating') == '2' ? 'selected' : ''); ?>>2 Stars</option>
                    <option value="1" <?php echo e(request()->query('searchRating') == '1' ? 'selected' : ''); ?>>1 Star</option>
                </select>

                <!-- Nút tìm kiếm -->
                <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0 !important;">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="col-md-2 text-end">
            <!-- Nút Reset -->
            <a href="<?php echo e(route('admin.reviews.manage')); ?>" class="btn btn-secondary">
                Reset
            </a>
        </div>
    </div>




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
                <th style="width: 300px;">Action</th>
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
                                <h5 style="color: #0056b3;" class="modal-title" id="viewModalLabel">View Review Details</h5>
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
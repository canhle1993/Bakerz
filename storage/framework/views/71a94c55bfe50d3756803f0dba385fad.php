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
       background-color: #0056b3 !important; /* Màu xanh dương đậm hơn khi hover */
   }
</style>

<?php $__env->startSection('SocialMedia_content'); ?>
<div class="container-fluid mt-4">

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
Social Media Management
</h1>
    <div class="d-flex justify-content-between mb-4">

        <button class="btn" data-bs-toggle="modal" data-bs-target="#addSocialMediaModal" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
            Add Social Media
        </button>

    </div>
<!-- Search Form -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="<?php echo e(route('admin.socialmedia.index')); ?>" method="GET" class="d-none d-md-flex mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-white border-0 ps-3" placeholder="Search by name..." value="<?php echo e(request()->input('search')); ?>" style="border-radius: 25px 0 0 25px;">
                <button class="btn" type="submit" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <a href="<?php echo e(route('admin.socialmedia.index')); ?>" class="btn btn-light" style="border-radius: 25px;">Reset</a>
    </div>
</div>

    <!-- Table -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($media->name); ?></td>
                <td>
                    <?php if($media->image): ?>
                        <img src="<?php echo e(asset('storage/' . $media->image)); ?>" alt="<?php echo e($media->name); ?>" width="100">
                    <?php else: ?>
                        No Image
                    <?php endif; ?>
                </td>
                <td><?php echo e($media->link); ?></td>

                <td>
                    <!-- Edit Button -->
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#editSocialMediaModal-<?php echo e($media->SocialMedia_id); ?>" style="background-color: #ffc107; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
                        Edit
                    </button>

                    <!-- Delete Button -->
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSocialMediaModal-<?php echo e($media->SocialMedia_id); ?>">Delete</button>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editSocialMediaModal-<?php echo e($media->SocialMedia_id); ?>" tabindex="-1" aria-labelledby="editSocialMediaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo e(route('admin.socialmedia.update', $media->SocialMedia_id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="modal-header">
                                <h5 class="modal-title" id="editSocialMediaLabel">Edit Social Media</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e($media->name); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="url" class="form-control" name="link" value="<?php echo e($media->link); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    <?php if($media->image): ?>
                                        <img src="<?php echo e(asset('storage/' . $media->image)); ?>" alt="<?php echo e($media->name); ?>" width="100">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteSocialMediaModal-<?php echo e($media->SocialMedia_id); ?>" tabindex="-1" aria-labelledby="deleteSocialMediaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo e(route('admin.socialmedia.delete', $media->SocialMedia_id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteSocialMediaLabel">Delete Social Media</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this Social Media link?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <!-- Pagination -->
    <div class="d-flex justify-content-center">

    <?php echo e($socialMedia->appends(request()->query())->links('pagination::bootstrap-5')); ?>

    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addSocialMediaModal" tabindex="-1" aria-labelledby="addSocialMediaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('admin.socialmedia.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="addSocialMediaLabel">Add Social Media</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control" name="link" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: #ffc107; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/socialmedia.blade.php ENDPATH**/ ?>
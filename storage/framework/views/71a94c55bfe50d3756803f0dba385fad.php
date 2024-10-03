<?php $__env->startSection('SocialMedia_content'); ?>
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between mb-4">
        <h3>Social Media Management</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSocialMediaModal">Add Social Media</button>
    </div>
<!-- Search Form -->

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="<?php echo e(route('admin.socialmedia.index')); ?>" method="GET" class="d-flex mb-3">
        <input type="text" name="search" class="form-control me-2" placeholder="Search by name..." value="<?php echo e(request()->input('search')); ?>">
        <button type="submit" class="btn btn-info me-2">Search</button>
    </form>
    </div>
    <div class="col-md-4">
    <a href="<?php echo e(route('admin.socialmedia.index')); ?>" class="btn btn-secondary">Reset</a>

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
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSocialMediaModal-<?php echo e($media->SocialMedia_id); ?>">Edit</button>

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
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/socialmedia.blade.php ENDPATH**/ ?>
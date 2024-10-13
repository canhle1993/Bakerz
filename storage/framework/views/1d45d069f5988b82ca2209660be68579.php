

<?php $__env->startSection('blog_content'); ?>
<div class="container mt-5">
    <h1>Blog Management</h1>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
                <!-- Form tìm kiếm blog theo tên -->
            <form class="d-flex mb-4" method="GET" action="<?php echo e(route('blog.index')); ?>">
                <input class="form-control me-2" type="search" placeholder="Search Blog Name" name="search" value="<?php echo e(request()->query('search')); ?>">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-4">
        <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-light">Reset</a>
        </div>
    </div>

    <!-- Button to open the modal to add blog -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBlogModal">Add Blog</button>

    <!-- Blog List -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Blog Name</th>
                <th>User</th>
                <th>Posted Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="Blog Image" width="100"></td>
                <td><?php echo e($blog->blog_name); ?></td>
                <td><?php echo e($blog->user->name); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($blog->posted_date)->format('d-m-Y H:i')); ?></td>
                <td>
                    <!-- View Blog Button -->
                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewBlogModal<?php echo e($blog->blog_id); ?>">View</button>
                    
                    <!-- Edit Blog Button -->
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editBlogModal<?php echo e($blog->blog_id); ?>">Edit</button>
                    
                    <!-- Delete Blog Button -->
                    <form action="<?php echo e(route('blog.delete', $blog->blog_id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- View Blog Modal -->
            <div class="modal fade" id="viewBlogModal<?php echo e($blog->blog_id); ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Blog</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Displaying blog details -->
                            <div class="mb-3">
                                <label for="viewBlogName">Blog Name:</label>
                                <p><?php echo e($blog->blog_name); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewPostedDate">Posted Date:</label>
                                <p><?php echo e(\Carbon\Carbon::parse($blog->posted_date)->format('d-m-Y H:i')); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewTitle1">Title 1:</label>
                                <p><?php echo e($blog->title1); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewTitle2">Title 2:</label>
                                <p><?php echo e($blog->title2); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewContent1">Content 1:</label>
                                <p><?php echo nl2br(e($blog->content1)); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewContent2">Content 2:</label>
                                <p><?php echo nl2br(e($blog->content2)); ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="viewImage">Blog Image:</label>
                                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="Blog Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Blog Modal -->
            <div class="modal fade" id="editBlogModal<?php echo e($blog->blog_id); ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo e(route('blog.update', $blog->blog_id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?> <!-- Sử dụng PUT để cập nhật blog -->
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Blog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form fields for editing the blog -->
                                <div class="mb-3">
                                    <label for="blog_name">Blog Name</label>
                                    <input type="text" class="form-control" id="blog_name" name="blog_name" value="<?php echo e($blog->blog_name); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title1">Title 1</label>
                                    <input type="text" class="form-control" id="title1" name="title1" value="<?php echo e($blog->title1); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title2">Title 2</label>
                                    <input type="text" class="form-control" id="title2" name="title2" value="<?php echo e($blog->title2); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="content1">Content 1</label>
                                    <textarea class="form-control" id="content1" name="content1" rows="3" required><?php echo e($blog->content1); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="content2">Content 2</label>
                                    <textarea class="form-control" id="content2" name="content2" rows="3"><?php echo e($blog->content2); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image">Blog Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center">
        <?php echo e($blogs->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

    </div>
    <!-- Add Blog Modal -->
    <div class="modal fade" id="addBlogModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('blog.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Add Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form fields for adding a blog -->
                        <div class="mb-3">
                            <label for="blog_name">Blog Name</label>
                            <input type="text" name="blog_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="title1">Title 1</label>
                            <input type="text" name="title1" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="title2">Title 2</label>
                            <input type="text" name="title2" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="content1">Content 1</label>
                            <textarea name="content1" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content2">Content 2</label>
                            <textarea name="content2" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>
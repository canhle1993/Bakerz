

<?php $__env->startSection('admint_content'); ?>
    <div class="container-fluid">
        <h1 class="mt-4">ContactUs Management</h1>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="d-flex mb-4" method="GET" action="<?php echo e(route('admin.contact_us.index')); ?>">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search by Name" name="search" value="<?php echo e(request()->query('search')); ?>">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <?php if(request()->query('search')): ?>
                        <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                    <?php endif; ?>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Comment</th>
                    <th>Status</th> <!-- Cột trạng thái -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->phone); ?></td>
                        <td><?php echo e($contact->address); ?></td>
                        <td><?php echo nl2br(e($contact->comment)); ?></td>
                        <td>
                            <?php if($contact->status == 'answered'): ?>
                                <span class="badge bg-success">Answered</span>
                            <?php else: ?>
                                <span class="badge bg-warning">Unanswered</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <!-- Nút mở modal trả lời -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal" data-id="<?php echo e($contact->ID); ?>" data-email="<?php echo e($contact->email); ?>" data-name="<?php echo e($contact->name); ?>">
                                Replies
                            </button>
                            <!-- Nút mở modal xem câu trả lời -->
                            <?php if($contact->status == 'answered'): ?>
                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewReplyModal" data-reply="<?php echo e($contact->reply); ?>">
                                        View
                                    </button>
                                <?php endif; ?>
                            <form action="<?php echo e(route('admin.contact_us.delete', $contact->ID)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($contacts->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

        </div>
    </div>

    <!-- Modal cho form trả lời -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyModalLabel">Reply to <span id="contactName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="replyForm" action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reply">Reply</label>
                            <textarea name="reply" id="reply" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal cho form xem câu trả lời -->
<div class="modal fade" id="viewReplyModal" tabindex="-1" aria-labelledby="viewReplyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewReplyModalLabel">View Reply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="viewReplyContent"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


    <!-- Script để điền dữ liệu động vào modal -->
    <script>
       document.addEventListener('DOMContentLoaded', function () {
        var replyModal = document.getElementById('replyModal');
        replyModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var contactId = button.getAttribute('data-id');
            var contactName = button.getAttribute('data-name');
            var contactEmail = button.getAttribute('data-email');

            // Đặt giá trị vào form
            var modalTitle = replyModal.querySelector('.modal-title #contactName');
            modalTitle.textContent = contactName;

            // Cập nhật action form với URL động
            var form = replyModal.querySelector('form');
            form.action = "<?php echo e(route('admin.contact_us.sendReply', '')); ?>/" + contactId;
        });

        var viewReplyModal = document.getElementById('viewReplyModal');
            viewReplyModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var replyContent = button.getAttribute('data-reply');
                var modalBody = viewReplyModal.querySelector('#viewReplyContent');
                modalBody.textContent = replyContent;
            });

        var resetButton = document.getElementById('reset-search');
            if (resetButton) {
                resetButton.addEventListener('click', function () {
                    window.location.href = "<?php echo e(route('admin.contact_us.index')); ?>";
                });
            }
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/contact_us/index.blade.php ENDPATH**/ ?>
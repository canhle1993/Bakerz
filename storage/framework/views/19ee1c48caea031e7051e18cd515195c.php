<?php $__env->startSection('catogory_content'); ?>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="darkpan-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="darkpan-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="darkpan-1.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="darkpan-1.0.0/css/style.css" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Bootstrap CSS -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">List Catagory</h4>

                        <!-- Form tìm kiếm -->
                        <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo e(route('catalog.index')); ?>">
                            <input class="form-control bg-dark border-0" type="search" placeholder="Category name" name="search" value="<?php echo e(request()->query('search')); ?>">
                            <button type="submit" class="btn btn-primary">Search</button>
                            <?php if(request()->query('search')): ?>
                                <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                            <?php endif; ?>
                        </form>

                        <a id="btnCreate" href="#">Create Catagory </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="<?php echo e(route('catalog.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <tr id="row-create" style="display:none">
                                <td></td>
                                <td>
                                    <input type="file" name="new_category_image" id="new_category_image">
                                </td>
                                <td id="name-create"><input  type="text" name ="new_category_name" id="new_category_name"></td>
                                <td>
                                <button type="submit" class="btn btn-success m-2" >Save</button>
                                <button id="btnCancelAdd" type="button" class="btn btn-secondary m-2">Cancel</button>
                                </td>
                            </tr>   
                            </form>
                            <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="row-<?php echo e($catalog->category_id); ?>">
                                <td><?php echo e(($catalogs->currentPage() - 1) * $catalogs->perPage() + $loop->iteration); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('storage/catalogs/' . $catalog->image)); ?>" alt="Hình ảnh" width="100" class="mt-2">
                                </td>
                                <td id="name-cell-<?php echo e($catalog->category_id); ?>"><?php echo e($catalog->category_name); ?></td>
                                <td>
                                <a href="javascript:void(0);" class="bi bi-pencil m-2"
                                data-category-id="<?php echo e($catalog->category_id); ?>"
                                data-update-url="<?php echo e(route('catalog.update', ['catalog' => $catalog->category_id])); ?>"
                                onclick="editRow(this)"></a>
                                <a class="btn btn-outline-danger m-2" href="#" data-url="<?php echo e(route('catalog.destroy', $catalog->category_id)); ?>" onclick="showDeleteModal(this)">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        <?php echo e($catalogs->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

                    </div>


                </div>
            </div>
            <!-- Recent Sales End -->
            <!-- Modal Popup -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: grey;" class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" action="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

<script>


    function showDeleteModal(element) {
        // Lấy giá trị URL từ thuộc tính data-url
        var actionUrl = element.getAttribute('data-url');

        // Gán action URL cho form xóa trong modal
        document.getElementById('deleteForm').action = actionUrl;

        // Hiển thị modal
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }

    let currentEditRow = null;

    function editRow(element) {
        var categoryId = element.getAttribute('data-category-id');
        var updateUrl = element.getAttribute('data-update-url');
        // Lấy các phần tử trong dòng cần chỉnh sửa
        var nameCell = document.getElementById('name-cell-' + categoryId);
        var row = document.getElementById('row-' + categoryId);
        if (currentEditRow !== null) {
            cancelEdit(currentEditRow);
        }
        // Kiểm tra xem các phần tử có tồn tại không
        if (!nameCell || !row) {
            console.error('Element not found for categoryId: ' + categoryId);
            return; // Ngăn việc tiếp tục nếu phần tử không tồn tại
        }

        // Tạo input cho tên
        var currentName = nameCell.innerHTML;
        nameCell.innerHTML = '<input type="text" id="name-input-' + categoryId + '" value="' + currentName.trim() + '">';

        // Tạo input file cho hình ảnh
        var imageCell = row.children[1];
        var currentImage = imageCell.querySelector('img').src;
        imageCell.innerHTML = '<input onchange="changeFile('+categoryId+')" type="file" id="image-input-' + categoryId + '">';

        // Thêm nút save và cancel
        var actionCell = row.children[3];
        actionCell.innerHTML = `
            <form id="edit-form-${categoryId}" action="${updateUrl}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <input  type="hidden" name ="category_name" id="category_name-` + categoryId + `">
                <input style="display:none;" type="file" name="category_image" id="category_image-` + categoryId + `">
                <button type="button" class="btn btn-success m-2" onclick="saveRow(${categoryId})">Save</button>
                <button type="button" class="btn btn-secondary m-2" onclick="cancelEdit(${categoryId}, '${currentName}', '${currentImage}')">Cancel</button>
            </form>
        `;
        currentEditRow = categoryId;
    }

    function saveRow(categoryId) {

        document.getElementById('category_name-' + categoryId).value = document.getElementById('name-input-' + categoryId).value
        // Submit form
        document.getElementById('edit-form-' + categoryId).submit();
    }

    function cancelEdit(categoryId, originalName, originalImage) {
        var row = document.getElementById('row-' + categoryId);
        var nameCell = document.getElementById('name-cell-' + categoryId);
        var updateUrl = row.getAttribute('data-update-url');
        var deleteUrl = row.getAttribute('data-delete-url');
        // Khôi phục lại nội dung ban đầu
        document.getElementById('name-cell-' + categoryId).innerHTML = originalName;
        document.getElementById('row-' + categoryId).children[1].innerHTML = `<img src="${originalImage}" alt="Hình ảnh" width="100" class="mt-2">`;
        var actionCell = document.getElementById('row-' + categoryId).children[3];
        actionCell.innerHTML = `
            <a href="javascript:void(0);" class="bi bi-pencil m-2"
           data-category-id="${categoryId}"
           data-update-url="${updateUrl}"
           onclick="editRow(this)"></a>
            <a class="btn btn-outline-danger m-2" href="#" data-url="${deleteUrl}" onclick="showDeleteModal(this)">Delete</a>
        `;
        currentEditRow = null;
    }

    function changeFile(categoryId) {
        var fileInput = document.getElementById('image-input-' + categoryId);
        var files = fileInput.files; // Lấy các file đã chọn

        // Kiểm tra nếu có file được chọn
        if (files.length > 0) {
            // Tạo URL để hiển thị file (nếu là hình ảnh)
            var fileURL = URL.createObjectURL(files[0]);
            // Nếu muốn hiển thị file được chọn (nếu là hình ảnh)
            var imagePreview = document.getElementById('category_image-' + categoryId);
            imagePreview.files = fileInput.files;  // Hiển thị ảnh đã chọn
        }
    }

    document.getElementById('btnCreate').addEventListener('click', function(event) {
        
        document.getElementById("row-create").style.display ='contents'
        
    });
    document.getElementById('btnCancelAdd').addEventListener('click', function(event) {
        document.getElementById("row-create").style.display ='none'
    });

    document.getElementById('reset-search').addEventListener('click', function() {
            window.location.href = "<?php echo e(route('catalog.index')); ?>";
        });

</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/catagorylist.blade.php ENDPATH**/ ?>
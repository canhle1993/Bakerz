<?php $__env->startSection('catogory_content'); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>

.table {
    border-collapse: separate !important;
    border-spacing: 0 15px !important;
    background-color: #fff !important;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
    border-radius: 10px !important;
    overflow: hidden !important;
}

.table thead th {
    background-color: #BC8157 !important;
    color: #fff !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
    padding: 12px 15px !important;
    text-align: center !important;
    vertical-align: middle !important;
}

.table tbody tr {
    background-color: #f9f9f9 !important;
    transition: background-color 0.3s ease !important;
}

.table tbody tr:hover {
    background-color: #e9ecef !important;
}

.table td {
    padding: 12px 15px !important;
    color: #333 !important;
    border: none !important;
    text-align: center !important;
    vertical-align: middle !important;
}

/* Button styles */
.btn-success, .btn-secondary, .btn-outline-danger {
    padding: 6px 12px !important;
    font-size: 0.9rem !important;
    border-radius: 4px !important;
    transition: background-color 0.3s ease, box-shadow 0.3s ease !important;
}

.btn-success:hover {
    background-color: #28a745 !important;
    color: white !important;
    box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.5) !important;
}

.btn-secondary:hover {
    background-color: #6c757d !important;
    color: white !important;
    box-shadow: 0px 4px 10px rgba(108, 117, 125, 0.5) !important;
}

.btn-outline-danger:hover {
    background-color: #dc3545 !important;
    color: white !important;
    box-shadow: 0px 4px 10px rgba(220, 53, 69, 0.5) !important;
}

.table td img {
    border-radius: 5px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    transition: transform 0.3s ease !important;
}

.table td img:hover {
    transform: scale(1.05) !important;
}

/* Để điều chỉnh responsive */
@media (max-width: 768px) {
    .table td {
        display: block !important;
        text-align: left !important;
        padding-left: 50% !important;
        position: relative !important;
    }

    .table td:before {
        content: attr(data-label) !important;
        position: absolute !important;
        left: 10px !important;
        font-weight: bold !important;
        text-transform: uppercase !important;
    }


}

    </style>


<?php if(session('success')): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo e(session('success')); ?>',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
</script>
<?php endif; ?>

    <!-- Bootstrap CSS -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 style="
                        color: #BC8157;
                        font-size: 2.5rem;
                        font-weight: bold;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
                        margin: 20px 0;
                        text-align: center;
                        padding: 10px;
                        border: 4px dashed #BC8157;
                        background-color: rgba(230, 247, 255, 0.7);
                        border-radius: 15px;">
                        List Heathy Category
                    </h4>

                    <!-- Form tìm kiếm -->
                    <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo e(route('heathy.index')); ?>">
                        <div class="input-group">
                            <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Search by name" name="search" value="<?php echo e(request()->query('search')); ?>" style="border-radius: 25px 0 0 25px;">
                            <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>

                    <a id="btnCreate" href="#" style="
                        background-color: #0fa7bf;
                        color: white;
                        font-weight: bold;
                        padding: 10px 20px;
                        border-radius: 5px;
                        text-decoration: none;
                        display: inline-block;
                        transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#0056b3'; this.style.boxShadow='0 4px 8px rgba(0, 123, 255, 0.3)';"
                        onmouseout="this.style.backgroundColor='#0fa7bf'; this.style.boxShadow='none';">
                        Create HeathyType
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0" style="
                        border-collapse: separate;
                        border-spacing: 0 15px;
                        background-color: #fff;
                        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
                        border-radius: 10px;
                        overflow: hidden;">
                        <thead>
                            <tr style="background-color: #BC8157; color: white; font-weight: bold; text-transform: uppercase; text-align: center;">
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="<?php echo e(route('heathy.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <tr id="row-create" style="display:none;">
                                    <td></td>
                                    <td><input type="text" name="new_heath_catalog" id="new_heath_catalog" style="border: 1px solid #ced4da; border-radius: 5px; padding: 5px 10px; width: 100%;"></td>
                                    <td>
                                        <button type="submit" class="btn" style="
                                            background-color: #28a745;
                                            color: white;
                                            padding: 6px 12px;
                                            border-radius: 4px;
                                            transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                                            Save
                                        </button>
                                        <button id="btnCancelAdd" type="button" class="btn" style="
                                            background-color: #6c757d;
                                            color: white;
                                            padding: 6px 12px;
                                            border-radius: 4px;
                                            transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                                            Cancel
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            <?php $__currentLoopData = $heathies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heathy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="row-<?php echo e($heathy->heath_id); ?>" style="background-color: #f9f9f9; transition: background-color 0.3s ease;">
                                <td><?php echo e(($heathies->currentPage() - 1) * $heathies->perPage() + $loop->iteration); ?></td>
                                <td id="name-cell-<?php echo e($heathy->heath_id); ?>"><?php echo e($heathy->heath_catalog); ?></td>
                                <td>
                                    <a href="javascript:void(0);" class="bi bi-pencil m-2" style="color: #007bff;" data-category-id="<?php echo e($heathy->heath_id); ?>" data-update-url="<?php echo e(route('heathy.update', ['heathy' => $heathy->heath_id])); ?>" onclick="editRow(this)">
                                    </a>
                                    <a class="btn" href="#" data-url="<?php echo e(route('heathy.destroy', $heathy->heath_id)); ?>" onclick="showDeleteModal(this)" style="
                                        background-color: #dc3545;
                                        color: white;
                                        padding: 6px 12px;
                                        border-radius: 4px;
                                        transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                                        Delete
                                    </a>
                                    <form id="deleteForm" method="POST" style="display:none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <div style="height: 20px;"></div>
                <div class="d-flex justify-content-center">
                    <?php echo e($heathies->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

                </div>
            </div>



            <script>
                function showDeleteModal(element) {
                    var actionUrl = element.getAttribute('data-url');
                    document.getElementById('deleteForm').action = actionUrl;
                    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
                    deleteModal.show();
                }

                document.getElementById('btnCreate').addEventListener('click', function() {
                    document.getElementById("row-create").style.display = 'contents';
                });

                document.getElementById('btnCancelAdd').addEventListener('click', function() {
                    document.getElementById("row-create").style.display = 'none';
                });

                document.getElementById('reset-search').addEventListener('click', function() {
                    window.location.href = "<?php echo e(route('heathy.index')); ?>";
                });
            </script>

<script>


function showDeleteModal(element) {
    var actionUrl = element.getAttribute('data-url');

    Swal.fire({
        title: 'Are you sure?',
        text: "This will move the healthy type to the blacklist and restrict their access!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, move it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Tạo một form ẩn nếu chưa có, hoặc sử dụng form có sẵn
            var form = document.getElementById('deleteForm');
            if (!form) {
                form = document.createElement('form');
                form.id = 'deleteForm';
                form.method = 'POST';
                document.body.appendChild(form);
            }

            form.action = actionUrl;
            form.innerHTML = `
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            `;
            form.submit();
        }
    });
}


    let currentEditRow = null;

    function editRow(element) {
        var heathyId = element.getAttribute('data-category-id');
        var updateUrl = element.getAttribute('data-update-url');
        // Lấy các phần tử trong dòng cần chỉnh sửa
        var nameCell = document.getElementById('name-cell-' + heathyId);
        var row = document.getElementById('row-' + heathyId);
        // Nếu đã có dòng đang được chỉnh sửa, hủy chỉnh sửa dòng đó trước
        if (currentEditRow !== null) {
            cancelEdit(currentEditRow);
        }
        // Kiểm tra xem các phần tử có tồn tại không
        if (!nameCell || !row) {
            console.error('Element not found for heathyId: ' + heathyId);
            return; // Ngăn việc tiếp tục nếu phần tử không tồn tại
        }

        // Tạo input cho tên
        var currentName = nameCell.innerHTML;
        nameCell.innerHTML = '<input type="text" id="name-input-' + heathyId + '" value="' + currentName.trim() + '">';

        // Tạo input file cho hình ảnh
        var imageCell = row.children[1];
        // Thêm nút save và cancel
        var actionCell = row.children[2];
        actionCell.innerHTML = `
            <form id="edit-form-${heathyId}" action="${updateUrl}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <input  type="hidden" name ="heath_catalog" id="heath_catalog-` + heathyId + `">
                <button type="button" class="btn btn-success m-2" onclick="saveRow(${heathyId})">Save</button>
                <button type="button" class="btn btn-secondary m-2" onclick="cancelEdit(${heathyId}, '${currentName}')">Cancel</button>
            </form>
        `;
        // Gán giá trị cho biến currentEditRow
        currentEditRow = heathyId;
    }

    function saveRow(heathyId) {

        document.getElementById('heath_catalog-' + heathyId).value = document.getElementById('name-input-' + heathyId).value
        // Submit form
        document.getElementById('edit-form-' + heathyId).submit();
    }

    function cancelEdit(heathyId, originalName) {
        var row = document.getElementById('row-' + heathyId);
        var nameCell = document.getElementById('name-cell-' + heathyId);
        var updateUrl = row.getAttribute('data-update-url');
        var deleteUrl = row.getAttribute('data-delete-url');
        // Khôi phục lại nội dung ban đầu
        document.getElementById('name-cell-' + heathyId).innerHTML = originalName;
        var actionCell = document.getElementById('row-' + heathyId).children[2];
        actionCell.innerHTML = `
            <a href="javascript:void(0);" class="bi bi-pencil m-2"
           data-category-id="${heathyId}"
           data-update-url="${updateUrl}"
           onclick="editRow(this)"></a>
        <a class="btn btn-outline-danger m-2" href="#" data-url="${deleteUrl}" onclick="showDeleteModal(this)">Delete</a>
        `;
        // Đặt lại currentEditRow về null
        currentEditRow = null;
    }

    document.getElementById('btnCreate').addEventListener('click', function(event) {

        document.getElementById("row-create").style.display ='contents'

    });
    document.getElementById('btnCancelAdd').addEventListener('click', function(event) {
        document.getElementById("row-create").style.display ='none'
    });

    document.getElementById('reset-search').addEventListener('click', function() {
            window.location.href = "<?php echo e(route('heathy.index')); ?>";
        });

</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/heathylist.blade.php ENDPATH**/ ?>
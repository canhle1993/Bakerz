@extends('admin.dashboard')

@section('catogory_content')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Frame1.png')}}">

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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Table styling */
.table {
    border-collapse: separate !important;
    border-spacing: 0 15px !important;
    background-color: #fff !important;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
    border-radius: 10px !important;
    overflow: hidden !important;
}

/* Table Header */
.table thead th {
    background-color: #BC8157 !important;
    color: #fff !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
    padding: 12px 15px !important;
    text-align: center !important;
    vertical-align: middle !important;
}

/* Table rows styling */
.table tbody tr {
    background-color: #f9f9f9 !important;
    transition: background-color 0.3s ease !important;
}

.table tbody tr:hover {
    background-color: #e9ecef !important;
}

/* Table data cells */
.table td {
    padding: 12px 15px !important;
    color: #333 !important;
    border: none !important;
    text-align: center !important;
    vertical-align: middle !important;
}

/* Table image styling */
.table td img {
    border-radius: 5px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    transition: transform 0.3s ease !important;
}

.table td img:hover {
    transform: scale(1.05) !important;
}

/* Action buttons */
.btn-outline-danger {
    color: #dc3545 !important;
    border: 1px solid #dc3545 !important;
    transition: all 0.3s ease !important;
}

.btn-outline-danger:hover {
    background-color: #dc3545 !important;
    color: #fff !important;
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5) !important;
    transform: scale(1.05) !important;
}

    </style>


@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
@endif


@if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{!! implode('\r\n', $errors->all()) !!}", // Nối tất cả các lỗi bằng \r\n
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
@endif
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 style="color: #BC8157;
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
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);">
                        List Category
                    </h4>

                        <!-- Form tìm kiếm -->
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('catalog.index') }}">
                            <div class="input-group">
                                <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Category name" name="search" value="{{ request()->query('search') }}">
                                <button type="submit" class="btn btn-primary" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;"><i class="fas fa-search"></i></button>
                                @if(request()->query('search'))
                                    <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                                @endif
                            </div>
                        </form>

                        <a id="btnCreate" href="#" style="background-color: #0fa7bf;
                          color: white;
                          font-weight: bold;
                          padding: 10px 20px;
                          border-radius: 5px;
                          text-decoration: none;
                          display: inline-block;
                          transition: all 0.3s ease;"
                          onmouseover="this.style.backgroundColor='#0056b3'; this.style.boxShadow='0 4px 8px rgba(0, 123, 255, 0.3)';"
                          onmouseout="this.style.backgroundColor='#0fa7bf'; this.style.boxShadow='none';"
                          >Create Catagory </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white" style="background-color: #BC8157; color: white; font-weight: bold;">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="{{ route('catalog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
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
                            @foreach($catalogs as $catalog)
                            <tr id="row-{{ $catalog->category_id }}"  style="background-color: #f9f9f9; transition: background-color 0.3s ease;">
                                <td>{{ ($catalogs->currentPage() - 1) * $catalogs->perPage() + $loop->iteration }}</td>
                                <td>
                                <img src="{{ asset('storage/catalogs/' . $catalog->image) }}" alt="Image" width="100" class="mt-2" style="border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">                                </td>
                                <td id="name-cell-{{ $catalog->category_id }}">{{ $catalog->category_name }}</td>
                                <td>
                                <a href="javascript:void(0);" class="bi bi-pencil m-2"
                                data-category-id="{{ $catalog->category_id }}"
                                data-update-url="{{ route('catalog.update', ['catalog' => $catalog->category_id]) }}"
                                onclick="editRow(this)"  style="color: #007bff;"></a>
                                <a class="btn btn-outline-danger m-2" href="#" data-url="{{ route('catalog.destroy', $catalog->category_id) }}" onclick="confirmDelete(this)">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        {{ $catalogs->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
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
                        @csrf
                        @method('DELETE')
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

    function confirmDelete(element) {
        // Lấy URL từ thuộc tính data-url của thẻ a
        var actionUrl = element.getAttribute('data-url');

        // Hiển thị SweetAlert2 để xác nhận
        Swal.fire({
            title: 'Are you sure?',
            text: "This will move the categorogy to the blacklist and restrict their access!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Tạo form động để submit yêu cầu xóa
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = actionUrl;

                // Thêm CSRF token vào form
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}'; // Laravel CSRF token
                form.appendChild(csrfToken);

                // Thêm method DELETE vào form
                var methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Thêm form vào body và submit
                document.body.appendChild(form);
                form.submit();
            }
        });
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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            window.location.href = "{{ route('catalog.index') }}";
        });

</script>
    @endsection

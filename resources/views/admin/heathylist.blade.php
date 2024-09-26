@extends('admin.dashboard')

@section('catogory_content')
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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">List Heathy Catagory </h4>
                        <!-- Form tìm kiếm -->
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('heathy.index') }}">
                            <input class="form-control bg-dark border-0" type="search" placeholder="Search by name" name="search" value="{{ request()->query('search') }}">
                            <button type="submit" class="btn btn-primary">Search</button>
                            @if(request()->query('search'))
                                <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                            @endif
                        </form>
                        <a id="btnCreate" href="#">Create HeathyType </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="{{ route('heathy.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <tr id="row-create" style="display:none">
                                <td></td>
                                <td id="name-create"><input  type="text" name ="new_heath_catalog" id="new_heath_catalog"></td>
                                <td>
                                <button type="submit" class="btn btn-success m-2" >Save</button>
                                <button id="btnCancelAdd" type="button" class="btn btn-secondary m-2">Cancel</button>
                                </td>
                            </tr>   
                            </form>
                            @foreach($heathies as $heathy)
                            <tr id="row-{{ $heathy->heath_id }}">
                                <td>{{ ($heathies->currentPage() - 1) * $heathies->perPage() + $loop->iteration }}</td>
                                <td id="name-cell-{{ $heathy->heath_id }}">{{ $heathy->heath_catalog }}</td>
                                <td>
                                <a href="javascript:void(0);" class="bi bi-pencil m-2"
                                data-category-id="{{ $heathy->heath_id }}"
                                data-update-url="{{ route('heathy.update', ['heathy' => $heathy->heath_id]) }}"
                                onclick="editRow(this)"></a>
                                <a class="btn btn-outline-danger m-2" href="#" data-url="{{ route('heathy.destroy', $heathy->heath_id) }}" onclick="showDeleteModal(this)">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        {{ $heathies->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            window.location.href = "{{ route('heathy.index') }}";
        });

</script>
    @endsection

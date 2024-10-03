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
                        <h4 class="mb-0">List Banner</h4>

                        <!-- Form tìm kiếm -->
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('banner.index') }}">
                            <input class="form-control bg-dark border-0" type="search" placeholder="Banner Tilte" name="search" value="{{ request()->query('search') }}">
                            <button type="submit" class="btn btn-primary">Search</button>
                            @if(request()->query('search'))
                                <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                            @endif
                        </form>

                        <a id="btnCreate" href="#">Create Banner </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Banner Image</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Tilte Line 1</th>
                                    <th scope="col">Tilte Line 2</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $banner)
                            <tr id="row-{{ $banner->banner_id }}">
                                <td>{{ ($banners->currentPage() - 1) * $banners->perPage() + $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/banners/' . $banner->image_banner) }}" alt="Hình ảnh" width="100" class="mt-2">
                                </td>
                                <td>
                                    <img src="{{ asset('storage/banners/' . $banner->image_product) }}" alt="Hình ảnh" width="100" class="mt-2">
                                </td>
                                <td>{{ $banner->title1 }}</td>
                                <td>{{ $banner->title2 }}</td>
                                <td>{{ $banner->description }}</td>
                                <td>
                                <a href="javascript:void(0);" class="bi bi-pencil m-2"
                                data-banner-id="{{ $banner->banner_id }}"
                                data-update-url="{{ route('banner.update', ['banner' => $banner->banner_id]) }}"
                                onclick="editRow(this)"></a>
                                <a class="btn btn-outline-danger m-2" href="#" data-url="{{ route('banner.destroy', $banner->banner_id) }}" onclick="showDeleteModal(this)">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        {{ $banners->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
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
                    Are you sure you want to delete this banner?
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

<!-- Modal -->
<div class="modal fade" id="createBannerModal" tabindex="-1" aria-labelledby="createBannerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="createBannerModalLabel">Create New Banner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form để tạo banner -->
        <form id="createBannerForm">
          <div class="mb-3">
            <label for="image_banner" class="form-label">Image Banner <span class="text-primary">* </span></label>
            <input type="file" class="form-control" id="image_banner" placeholder="Enter image banner URL">
          </div>
          <div class="mb-3">
            <label for="image_product" class="form-label">Image Product <span class="text-primary">* </span></label>
            <input type="file" class="form-control" id="image_product" placeholder="Enter image product URL">
          </div>
          <div class="mb-3">
            <label for="title1" class="form-label">Title 1 <span class="text-primary">*</span></label>
            <input type="text" class="form-control bg-light text-dark" id="title1" placeholder="Enter title 1">
          </div>
          <div class="mb-3">
            <label for="title2" class="form-label">Title 2</label>
            <input type="text" class="form-control bg-light text-dark" id="title2" placeholder="Enter title 2">
          </div>
          <div class="mb-3">
            <label for="product_id" class="form-label">Product ID <span class="text-primary">*</span></label>
            <div class="input-group">
              <input type="text" class="form-control bg-light text-dark" id="product_id" readonly>
              <input readonly type="text" class="form-control bg-light text-dark" id="txtproduct_name">
              <button type="button" class="btn btn-outline-secondary" id="btnZoomProduct" data-bs-toggle="modal" data-bs-target="#productModal">Select Product</button>
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control bg-light text-dark" id="description" rows="3" placeholder="Enter description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveBannerBtn">Save Banner</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Select Product -->
<div style="max-width: 90%;" class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Select Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style=" max-height: 82vh; overflow-y: auto;">
        <!-- Tìm kiếm sản phẩm -->
        <div class="mb-3">
          <input type="text" id="searchProduct" name="modalproduct_search" class="form-control" placeholder="Search product by name">
        </div>
        <!-- Danh sách sản phẩm để chọn -->
        <table class="table table-bordered" id="productTable">
          <thead>
            <tr>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Dữ liệu sẽ được chèn từ AJAX -->
          </tbody>
        </table>
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

let isEdit = false; // Biến để theo dõi trạng thái tạo mới hoặc chỉnh sửa
let updateUrl = ''; // URL để cập nhật banner khi ở chế độ chỉnh sửa

// Hàm hiển thị dữ liệu lên form khi nhấn nút "Edit"
function editRow(element) {
    isEdit = true; // Đang ở chế độ chỉnh sửa
    const bannerId = element.getAttribute('data-banner-id'); // Lấy ID của banner
    updateUrl = element.getAttribute('data-update-url'); // Lấy URL cập nhật
    
    // Lấy dữ liệu của banner từ hàng đã chọn
    const row = document.getElementById(`row-${bannerId}`);
    const title1 = row.querySelector('td:nth-child(4)').innerText;
    const title2 = row.querySelector('td:nth-child(5)').innerText;
    const description = row.querySelector('td:nth-child(6)').innerText;
    
    document.getElementById('createBannerModalLabel').innerText = "Edit Banner";
    // Gán dữ liệu vào form
    document.getElementById('title1').value = title1;
    document.getElementById('title2').value = title2;
    document.getElementById('product_id').value = '';
    document.getElementById('description').value = description;
    
    // Mở modal
    var createBannerModal = new bootstrap.Modal(document.getElementById('createBannerModal'));
    createBannerModal.show();
}

    // Thêm sự kiện click vào nút "Save" để xử lý việc tạo banner
    document.getElementById('saveBannerBtn').addEventListener('click', function() {
    // Tạo đối tượng FormData để gửi dữ liệu file
    const formData = new FormData();

    // Lấy giá trị từ các trường nhập
    const imageBannerFile = document.getElementById('image_banner').files[0]; // Lấy file ảnh banner
    const imageProductFile = document.getElementById('image_product').files[0]; // Lấy file ảnh sản phẩm

    formData.append('image_banner', imageBannerFile); // Thêm ảnh banner vào FormData
    formData.append('image_product', imageProductFile); // Thêm ảnh sản phẩm vào FormData
    formData.append('title1', document.getElementById('title1').value); // Thêm title1
    formData.append('title2', document.getElementById('title2').value); // Thêm title2
    formData.append('product_id', document.getElementById('product_id').value); // Thêm product_id
    formData.append('description', document.getElementById('description').value); // Thêm mô tả
    formData.append('_token', "{{ csrf_token() }}");

    // Nếu đang chỉnh sửa, thêm trường `_method` với giá trị `PUT`
    if (isEdit) {
        formData.append('_method', 'PUT');
    }
    // Kiểm tra xem các trường yêu cầu đã được điền hay chưa
    if (isEdit){
        if (!formData.get('title1') || !formData.get('product_id') ) {
            alert('Please fill out all required fields.');
            return; // Ngừng xử lý nếu có trường bị thiếu
        }
    } else {

        if (!imageBannerFile || !imageProductFile || !formData.get('title1') || !formData.get('product_id')) {
            alert('Please fill out all required fields.');
            return; // Ngừng xử lý nếu có trường bị thiếu
        }
    } 

    let url = isEdit ? updateUrl : "{{ route('banner.store') }}";
    
    // Gửi AJAX với dữ liệu là FormData
    $.ajax({
        url: url, // Đường dẫn đến route lưu banner mới
        method: 'POST',
        data: formData,
        processData: false, // Không xử lý dữ liệu (vì FormData đã xử lý)
        contentType: false, // Không đặt kiểu nội dung (để cho browser tự xử lý)
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Thêm CSRF token vào headers
        },
        success: function(response) {
            if (response.status === 'success') {
                // Tải lại danh sách banner hoặc cập nhật giao diện
                window.location.href = "{{ route('banner.index') }}"; // Điều hướng tới trang danh sách banner
            } else {
                // Xử lý lỗi từ server nếu có
                alert('Failed to create banner: ' + response.message);
            }
        },
        error: function(xhr) {
            console.error('Error:', xhr.responseText);
            alert('An error occurred while creating the banner.');
        }
    });

    // Đóng modal sau khi lưu dữ liệu
    var modal = bootstrap.Modal.getInstance(document.getElementById('createBannerModal'));
    modal.hide();
});

  // Sự kiện nhấn nút "Create Banner" để mở modal
  document.getElementById('btnCreate').addEventListener('click', function() {
    isEdit = false; // Ở chế độ tạo mới
    document.getElementById('createBannerForm').reset(); // Reset form về trạng thái trống

    var createBannerModal = new bootstrap.Modal(document.getElementById('createBannerModal'));
    createBannerModal.show();
  });

    // Sự kiện nhấn nút "Create Banner" để mở modal
    document.getElementById('btnZoomProduct').addEventListener('click', function() {
        loadProducts();
  });
  // Thêm sự kiện tìm kiếm sản phẩm
  document.getElementById('searchProduct').addEventListener('keyup', function() {
    loadProducts();
  });

  
  // Hàm load sản phẩm từ route product.index qua AJAX
  function loadProducts() {
    const tableBody = document.querySelector('#productTable tbody');
    
    // Xóa nội dung cũ của bảng
    tableBody.innerHTML = '';
    const searchValue = document.getElementById('searchProduct').value; // Lấy giá trị từ ô tìm kiếm
    $.ajax({
        url: "{{ route('product.index2') }}", // Đường dẫn để lấy lại giỏ hàng từ session
        method: "GET",
        data: {
            search: searchValue, // Truyền giá trị tìm kiếm
            _token: "{{ csrf_token() }}"
        },
        success: function(response) {
            // Đảm bảo rằng dữ liệu trả về có biến products
            if (response.status === 'success' && response.data.products) {
                let products = response.data.products; // Lấy danh sách sản phẩm từ response
                products.forEach(product => {
                    var imageUrl = `{{ asset('storage/products/') }}/${product.image}`;
                    const row = `
                        <tr>
                            <td><img src="${imageUrl}" alt="${product.product_name}" width="100"></td>
                            <td>${product.product_name}</td>
                            <td><button type="button" class="btn btn-primary btnSelectProduct" data-product-id="${product.product_id}" data-product-name="${product.product_name}">Select</button></td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });

                // Thêm sự kiện cho nút chọn sản phẩm
                document.querySelectorAll('.btnSelectProduct').forEach(function(button) {
                    button.addEventListener('click', function() {
                        var productId = this.getAttribute('data-product-id');
                        var productName = this.getAttribute('data-product-name');

                        // Gán product_id và product_name vào form
                        document.getElementById('product_id').value = productId;
                        document.getElementById('txtproduct_name').value = productName;

                        // Đóng modal sau khi chọn sản phẩm
                        var productModal = bootstrap.Modal.getInstance(document.getElementById('productModal'));
                        productModal.hide();
                    });
                });
            } else {
                console.error('Không có sản phẩm nào được tìm thấy.');
            }
        },
        error: function(xhr) {
            console.error('Error:', xhr.responseText);
            // alert('An error occurred while updating the cart.');
        }
    });
    }

    document.getElementById('reset-search').addEventListener('click', function() {
            window.location.href = "{{ route('banner.index') }}";
    });


</script>

@endsection

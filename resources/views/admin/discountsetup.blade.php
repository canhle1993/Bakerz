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

    <!-- Bootstrap CSS -->


    <style>
        /* Màu chủ đạo cho bảng */
        .table th {
            background-color: #BC8157 !important;
            color: white !important;
            font-weight: bold !important;
        }

        .table td {
            background-color: #F7F5F2 !important;  /* Màu nền nhẹ cho các ô trong bảng */
            color: #333 !important;  /* Màu chữ tối để dễ đọc */
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #E5D5C5 !important; /* Màu khi hover */
        }

        .btn-outline-info {
            color: #BC8157 !important;
            border-color: #BC8157 !important;
        }

        .btn-outline-info:hover {
            background-color: #BC8157 !important;
            color: white !important;
        }

        .btn-outline-danger {
            color: #ff4d4d !important;
            border-color: #ff4d4d !important;
        }

        .btn-outline-danger:hover {
            background-color: #ff4d4d !important;
            color: white !important;
        }

        /* Làm cho bảng có đường viền mềm mại */
        .table {
            border-radius: 10px !important;
            overflow: hidden !important;
        }

        .bg-secondary {
            background-color: #F7F5F2 !important; /* Màu nền sáng */
            color: #333 !important;  /* Màu chữ đậm */
        }

        /* Định dạng pagination */
        .pagination .page-item.active .page-link {
            background-color: #BC8157 !important;
            border-color: #BC8157 !important;
        }

        .pagination .page-link {
            color: #BC8157 !important;
        }

        .pagination .page-link:hover {
            background-color: #BC8157 !important;
            color: white !important;
        }

        .discount-button {
        background-color: #FFD700 !important;
        color: #333 !important;
        font-weight: bold !important;
        border: none !important;
        border-radius: 25px !important;
        padding: 10px 20px !important;
        transition: all 0.3s ease !important;
    }

    .discount-button:hover {
        background-color: #FFC107 !important;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2) !important;
        color: white !important;
    }


    </style>
           <!-- Recent Sales Start -->
           <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0 text-center" style="font-size: 42px !important; font-weight: bold !important; color: #f7f4f2 !important; letter-spacing: 2px !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;">
                            {{ $discount->promotion_name }} (discount {{ $discount->discount * 100 }}%)
                        </h4>


                        <!-- Thêm form tìm kiếm -->
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('discount.setup', $id) }}">
                            <div class="input-group">
                                <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Product name" name="search" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
                                <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                                    <i class="fas fa-search"></i>
                                </button>

                                @if(request()->query('search'))
                                    <!-- Nút "x" để reset tìm kiếm -->
                                    <button type="button" class="btn btn-light ms-2" id="reset-search" style="border-radius: 25px;">
                                        ✖
                                    </button>
                                @endif
                            </div>
                        </form>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Inventory</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                     <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/products/' . $product->image) }}" alt="Hình ảnh" width="100" class="mt-2">
                                    </td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>
                                    @foreach($product->catalogs as $catalog)
                                        {{ $catalog->category_name }}
                                    @endforeach
                                    </td>
                                    <td>{{ $product->inventory }}</td>
                                    <td>{{ formatPriceVND($product->price) }}</td>
                                    <td>
                                        <a class="btn btn-outline-info m-2 discount-button" href="{{ route('discount.update_discount', [$product->product_id, $id]) }}">Discount</a>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        {{ $products->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                    </div>
                </div>

                <div class="col-3">
                    <div class="bg-secondary rounded p-1">
                        @foreach($prodiscounts as $prodiscount)
                            <ul>
                                <li>{{ $prodiscount->product_name }}
                                    <br> Discount:
                                    @if($prodiscount->discounts->isNotEmpty())
                                        @foreach($prodiscount->discounts as $discount)
                                            {{ $discount->discount * 100}} %
                                        @endforeach
                                    @else
                                        No discounts available
                                    @endif
                                    <br>
                                    <a class="btn btn-outline-danger m-2" href="#" data-url="{{ route('discount.destroy_discount', [$prodiscount->product_id, $id]) }}" onclick="showDeleteModal(this)">Delete</a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
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

            document.getElementById('reset-search').addEventListener('click', function() {
                    // Đưa người dùng trở về trang mà không có tham số search
                    window.location.href="{{ route('discount.setup', $id) }}";

                });
            </script>
    @endsection
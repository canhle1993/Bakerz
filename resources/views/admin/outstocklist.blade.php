@extends('admin.dashboard')

@section('product_content')
    <!-- Favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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
    <!-- Bootstrap CSS -->


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

.table td img {
    border-radius: 5px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    transition: transform 0.3s ease !important;
}

.table td img:hover {
    transform: scale(1.05) !important;
}

.table th div {
    display: inline-block !important;
    float: right !important;
}

.table th i {
    color: #fff !important;
    font-size: 1rem !important;
}

.table th i:hover {
    color: #ffc107 !important;
    cursor: pointer !important;
}

/* Button */
.btn-outline-info {
    background-color: #17a2b8 !important;
    color: #fff !important;
    padding: 8px 12px !important;
    font-size: 0.9rem !important;
    border-radius: 4px !important;
    transition: background-color 0.3s ease, box-shadow 0.3s ease !important;
}

.btn-outline-info:hover {
    background-color: #138496 !important;
    box-shadow: 0px 4px 10px rgba(19, 132, 150, 0.5) !important;
    transform: scale(1.05) !important;
}

.btn-danger {
    background-color: #dc3545 !important;
    color: #fff !important;
    transition: all 0.3s ease-in-out !important;
}

.btn-danger:hover {
    background-color: #c82333 !important;
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5) !important;
    transform: scale(1.05) !important;
}

/* Điều chỉnh responsive */
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

    .table td img {
        display: inline-block !important;
    }
}

    </style>

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
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Thêm đổ bóng cho toàn bộ box */">
                        List Product
                    </h4>
                        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('product.index_outstock') }}">
                            <div class="input-group">
                                <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Product name" name="search" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
                                <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>


                        <form method="POST" action="{{ route('product.goallto_stockin') }}">
                        @csrf
                            <button type="submit" class="btn btn-outline-info border-0 m-2 text-danger">Move All to Stock In</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">
                                        Name
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'name_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'name_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Category
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_outstock', ['sort' => 'category_asc']) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_outstock', ['sort' => 'category_desc']) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Inventory
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'inventory_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'inventory_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Price
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'price_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_outstock', array_merge(request()->all(), ['sort' => 'price_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <!-- <td><input class="form-check-input" type="checkbox"></td> -->
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
                                    <form id="deleteForm" method="POST" action="{{ route('product.goto_stockin', $product->product_id) }}">
                                    @csrf
                                    <td>
                                        <button type="submit" class="btn btn-outline-info m-2">Go to Stock In</button>
                                    </td>
                                    </form>

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
        // Reset lại URL về trang không có tham số tìm kiếm
        window.location.href="{{ route('product.index_outstock') }}";
    });
</script>


@endsection

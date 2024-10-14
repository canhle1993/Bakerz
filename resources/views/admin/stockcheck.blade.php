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
        /* Table General Styles */
.table {
    border-collapse: separate;
    border-spacing: 0 15px;
    background-color: #fff;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.table thead {
    background-color: #BC8157;
    color: white;
}

.table thead th {
    padding: 12px 15px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
}

.table tbody tr {
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}

.table tbody tr:hover {
    background-color: #e9ecef;
}

.table tbody td {
    padding: 12px 15px;
    color: #333;
    text-align: center;
}

.table tbody td img {
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.table tbody td img:hover {
    transform: scale(1.05);
}

.table th div {
    display: inline-block;
    float: right;
}

.table th i {
    color: #fff;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.table th i:hover {
    color: #ffc107;
    cursor: pointer;
}

/* Button Styles */
.btn-outline-info, .btn-outline-danger {
    padding: 6px 12px;
    font-size: 0.9rem;
    border-radius: 4px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-outline-info:hover {
    background-color: #007bff;
    color: #fff;
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
    box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .table td {
        display: block;
        text-align: left;
        padding-left: 50%;
        position: relative;
    }

    .table td:before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .table td img {
        display: inline-block;
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
                    <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('product.index_stockcheck') }}">
                        <div class="input-group">
                            <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Product name" name="search" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
                            <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>


                        <label for="">Enter stock quantity</label>
                        <input id="quantityInput" class="form-control bg-dark border-0 text-danger" style="width: 15%;" type="number"
                            oninput="setQuantity(this.value)"
                            placeholder="Enter quantity" name="quanlity_stockin"
                            value="{{ old('quantity_stockin', request()->input('quantity_stockin')) }}"><br>
                            <form id="stockinAllLink" method="POST" action="{{ route('product.stockin_all') }}">
                                @csrf
                                <input hidden type="text" name="quanlity_stockin" class="inputTarget" placeholder="This will get the value automatically">
                                <button type="submit"
                                style="background-color: #007bff;
                                       color: white;
                                       font-weight: bold;
                                       padding: 10px 20px;
                                       border-radius: 5px;
                                       border: none;
                                       display: inline-block;
                                       transition: all 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#0056b3'; this.style.boxShadow='0 4px 8px rgba(0, 123, 255, 0.3)';"
                                onmouseout="this.style.backgroundColor='#007bff'; this.style.boxShadow='none';">
                            Stock In All Product In List
                        </button>


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
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'name_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'name_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Category
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_stockcheck', ['sort' => 'category_asc']) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_stockcheck', ['sort' => 'category_desc']) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Inventory
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'inventory_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'inventory_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Price
                                        <div style="float: right;">
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'price_asc'])) }}">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="{{ route('product.index_stockcheck', array_merge(request()->all(), ['sort' => 'price_desc'])) }}">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" style="width: 350px;">
                                        Action
                                    </th>
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
                                    <td>
                                        {{ $product->inventory }}
                                    </td>
                                    <td>{{ formatPriceVND($product->price) }}</td>
                                    <td >

                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <form method="POST" action="{{ route('product.stockin_byid', $product->product_id) }}">
                                                @csrf
                                                <input style="width: 80px; height: 38px; padding: 5px; margin-right: 15px; border-radius: 5px; border: 1px solid #ced4da;" type="number" name="quantity_stockin" class="inputTarget">
                                                <button type="submit"
                                                        style="background-color: #28a745;
                                                               color: white;
                                                               font-weight: bold;
                                                               padding: 10px 20px;
                                                               border-radius: 5px;
                                                               border: none;
                                                               display: inline-block;
                                                               transition: all 0.3s ease;"
                                                        onmouseover="this.style.backgroundColor='#218838'; this.style.boxShadow='0 4px 8px rgba(40, 167, 69, 0.3)';"
                                                        onmouseout="this.style.backgroundColor='#28a745'; this.style.boxShadow='none';">
                                                    Stock In
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('product.stockin_cancel', $product->product_id) }}">
                                                @csrf
                                                <button type="submit"
                                                        style="background-color: #dc3545;
                                                               color: white;
                                                               font-weight: bold;
                                                               padding: 10px 20px;
                                                               border-radius: 5px;
                                                               border: none;
                                                               display: inline-block;
                                                               transition: all 0.3s ease;"
                                                        onmouseover="this.style.backgroundColor='#c82333'; this.style.boxShadow='0 4px 8px rgba(220, 53, 69, 0.3)';"
                                                        onmouseout="this.style.backgroundColor='#dc3545'; this.style.boxShadow='none';">
                                                    Cancel
                                                </button>
                                            </form>
                                        </div>

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
        window.location.href="{{ route('product.index_stockcheck') }}";
    });
</script>

<script>
    // Lưu giá trị vào Local Storage
    function setQuantity(value) {
        document.querySelectorAll('.inputTarget').forEach(input => input.value = value);
        localStorage.setItem('quantity_stockin', value); // Lưu giá trị vào localStorage
    }

    // Khi load lại trang, lấy giá trị từ Local Storage và gán lại cho input
    document.addEventListener('DOMContentLoaded', function() {
        const savedQuantity = localStorage.getItem('quantity_stockin');
        if (savedQuantity) {
            document.getElementById('quantityInput').value = savedQuantity;
            document.querySelectorAll('.inputTarget').forEach(input => input.value = savedQuantity);
        }
    });
</script>
@endsection

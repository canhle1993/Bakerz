@extends('admin.dashboard')

@section('product_new')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>BakerzBite-Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

    <link href="{{asset('darkpan-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('darkpan-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('darkpan-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('darkpan-1.0.0/css/style.css')}}" rel="stylesheet">
</head>


<style>
     .title-product {
        color: #BC8157 !important;
        font-size: 32px !important;
        font-weight: bold !important;
        text-align: center !important;
        letter-spacing: 2px !important;
    }
    .bg-secondary {
        background-color: #F0E6DC !important;
        color: #333 !important;
    }

    .form-label {
        color: #BC8157 !important;
        font-weight: bold !important;
    }

    .form-control {
        background-color: #fff !important;
        color: #333 !important;
        border: 1px solid #BC8157 !important;
    }

    .form-control:focus {
        background-color: #fff !important;
        border-color: #BC8157 !important;
        box-shadow: 0 0 5px rgba(188, 129, 87, 0.8) !important;
    }

    .form-check-input:checked {
        background-color: #BC8157 !important;
        border-color: #BC8157 !important;
    }

    .btn-outline-info {
        color: #BC8157 !important;
        border-color: #BC8157 !important;
    }

    .btn-outline-info:hover {
        background-color: #BC8157 !important;
        color: #fff !important;
    }

    .btn-outline-light {
        color: #BC8157 !important;
        border-color: #BC8157 !important;
    }

    .btn-outline-light:hover {
        background-color: #BC8157 !important;
        color: #fff !important;
    }

    #previewImage0, #previewImage1, #previewImage2, #previewImage3 {
        margin-top: 10px !important;
        display: none !important;
        border: 2px solid #BC8157 !important;
    }


    .container-fluid {
        margin-top: 30px !important;
    }


    .mb-3 {
        margin-bottom: 20px !important;
    }


    .rounded {
        border-radius: 10px !important;
    }


    #btnCancel a {
        text-decoration: none !important;
        color: #BC8157 !important;
    }

    #btnCancel a:hover {
        color: #fff !important;
    }
</style>




<body>

    <div id="updateDetail" class="container-fluid pt-4 px-4">
        <div class="row pt-3">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4 title-product">New Product</h6>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Main Image</label>
                            <input class="form-control" type="file" id="formFile0" name="main_image">
                            <img id="previewImage0" src="#" alt="Product Image" width="100px"><br>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image 1</label>
                            <input class="form-control" type="file" id="formFile1" name="image_1">
                            <img id="previewImage1" src="#" alt="Product Image" width="100px"><br>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image 2</label>
                            <input class="form-control" type="file" id="formFile2" name="image_2">
                            <img id="previewImage2" src="#" alt="Product Image" width="100px"><br>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image 3</label>
                            <input class="form-control" type="file" id="formFile3" name="image_3">
                            <img id="previewImage3" src="#" alt="Product Image" width="100px"><br>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Product Name</label>
                            <input class="form-control" type="text" name="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Category</label><br>
                            @foreach($catalogs as $catalog)
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" name="catalog[]" value="{{ $catalog->category_id }}">
                                {{ $catalog->category_name }}<br>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Inventory</label>
                            <input class="form-control" type="number" name="inventory">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Unit Price</label>
                            <input class="form-control" type="number" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Healthy Options</label><br>
                            @foreach($heathys as $heathy)
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" name="heathy[]" value="{{ $heathy->heath_id }}">
                                {{ $heathy->heath_catalog }}<br>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Product description here" id="describe" name="describe" style="height: 150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-info m-2">Create</button>
                        <button id="btnCancel" type="button" class="btn btn-outline-light m-2">
                            <a href="{{ route('product.index') }}">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</body>
<script>
    // Lắng nghe sự kiện thay đổi file và cập nhật hình ảnh ngay lập tức
    document.getElementById('formFile0').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage0');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });

    document.getElementById('formFile1').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage1');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
    document.getElementById('formFile2').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage2');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
    document.getElementById('formFile3').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage3');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
</script>
</html>
@endsection

@extends('admin.dashboard')

@section('product_detail')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>BakerzBite-Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

    <link href="{{asset('darkpan-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('darkpan-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('darkpan-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('darkpan-1.0.0/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div id="showDetail" class="container-fluid pt-4 px-4">
    <div class="row pt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="row">
                <div class="col-md-11">
                <a href="{{ route('product.index') }}" class="btn btn-light m-2">← BACK</a>

                <h6 class="mb-4">{{$product->product_name}}</h6>
                <div class="row">
                    <div class="col-md-4">
                    @foreach($product->images as $image)
                        <img src="{{ asset('storage/products/' . $image->image) }}" alt="Product Image" width="200px" ><br>
                    @endforeach
                    </div>
                    <div class="col-md-8">
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Description</dt>
                            <dd class="col-sm-8">{{$product->describe}}</dd>
                        </dl>
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Category</dt>
                            <dd class="col-sm-8">
                                @foreach($product->catalogs as $catalog)
                                    {{ $catalog->category_name }} <br>
                                @endforeach
                            </dd>
                        </dl>
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Inventory</dt>
                            <dd class="col-sm-8">{{ $product->inventory}}</dd>
                        </dl>
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Unit Price</dt>
                            <dd class="col-sm-8">{{ formatPriceVND($product->price) }}</dd>
                        </dl>
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Heathy</dt>
                            <dd class="col-sm-8">
                                @foreach($product->heathyCatalogs as $heathyCatalog)
                                    {{ $heathyCatalog->heath_catalog }} <br>
                                @endforeach
                            </dd>
                        </dl>
                    </div>
                </div>
                </div>
                <div class="col-md-1">
                    <button id="btnEdit" type="button" class="btn btn-outline-success m-2">Edit</button>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        
    
        </div>
        <div class="col-md-1">
        
        </div>
    </div>
</div>

<div id="updateDetail" class="container-fluid pt-4 px-4" style="display: none;">
    <div class="row pt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Product Update</h6>
                <form action="{{ route('product.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Main Image</label>
                    <input class="form-control bg-dark" type="file" id="formFile1" name="main_image">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 1</label>
                    <input class="form-control bg-dark" type="file" id="formFile1" name="image_1">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 2</label>
                    <input class="form-control bg-dark" type="file" id="formFile3" name="image_2">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 3</label>
                    <input class="form-control bg-dark" type="file" id="formFile3" name="image_3">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Product Name</label>
                    <input class="form-control bg-dark" type="text" name="product_name" required value="{{$product->product_name}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Catagory</label><br>
                    @foreach($catalogs as $catalog)
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="catalog[]" value="{{ $catalog->category_id }}" 
                            {{ in_array($catalog->category_id, $product->catalogs->pluck('category_id')->toArray()) ? 'checked' : '' }}> 
                            {{ $catalog->category_name }}<br>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Inventory</label>
                    <input class="form-control bg-dark" type="number" name="inventory" value="{{$product->inventory}}">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Unit price</label>
                    <input class="form-control bg-dark" type="number" name="price" required value="{{$product->price}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Heathy</label><br>
                    @foreach($heathys as $heathy)
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="heathy[]" value="{{ $heathy->heath_id }}" 
                            {{ in_array($heathy->heath_id, $product->heathyCatalogs->pluck('heath_id')->toArray()) ? 'checked' : '' }}> 
                            {{ $heathy->heath_catalog }}<br>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Product description here" id="describe" name="describe" style="height: 150px;">{{$product->describe}}</textarea>
                </div>

                <button type="submit" class="btn btn-outline-info m-2">Update</button>
                <button id="btnCancel" type="button" class="btn btn-outline-light m-2">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
<script>
    document
    .getElementById("btnEdit")
    .addEventListener("click", function () {
        document.getElementById("showDetail").style.display = 'none';
        document.getElementById("updateDetail").style.display = 'block';
    });
    document
    .getElementById("btnCancel")
    .addEventListener("click", function () {
        document.getElementById("showDetail").style.display = 'block';
        document.getElementById("updateDetail").style.display = 'none';
    });
</script>
</html>
@endsection
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      #a1 {
        border: solid 2px #808080;
      }
      .product-table {
        padding: 20px;
        border-radius: 8px;
        background-color: #191c24;
        position: relative;
      }
      .product-image {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
      }
      .product-column {
        font-weight: bold;
        color: #ffc106; /* Màu chữ của cột 2 */
      }
      .product-info {
        color: #ffffff; /* Màu chữ của cột 3 */
        padding: 5px;
        border-radius: 5px;
      }
      .row-item {
        display: flex;
        justify-content: space-between;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
      }
      .table-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }
      .btn-edit,
      .btn-back {
        margin-bottom: 20px;
      }
    </style>
</head>

<body>
<div id="showDetail" class="container-fluid pt-4 px-4">
      <div class="product-table">
        <div class="row">
          <div class="col-md-12">
            <!-- Nút Back và Nút Edit nằm ngoài viền -->
            <div class="d-flex justify-content-between mb-3">
              <a href="{{ route('product.index') }}" class="btn btn-light m-2"
                >↩ Back</a
              >
              <div class="col-md-1">
                <button
                  id="btnEdit"
                  type="button"
                  class="btn btn-outline-success m-2"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Cột 1: Hiện 3 tấm hình -->
          <div class="col-md-2">
            @foreach($product->images as $image)
            <img
              src="{{ asset('storage/products/' . $image->image) }}"
              alt="Product Image"
              class="product-image"
            /><br />
            @endforeach
          </div>

          <!-- Cột 2 và Cột 3: Hiển thị nhãn và thông tin chi tiết cùng hàng -->
          <div id="a1" class="col-md-10">
            <div class="row-item">
              <div class="col-md-3 product-column">Name</div>
              <div class="col-md-9 product-info">
                {{$product->product_name}}
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Category</div>
              <div class="col-md-9 product-info">
                @foreach($product->catalogs as $catalog)
                <p>{{ $catalog->category_name }}</p>
                @endforeach
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Inventory</div>
              <div class="col-md-9 product-info">{{ $product->inventory}}</div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Unit Price</div>
              <div class="col-md-9 product-info">
                {{ formatPriceVND($product->price) }}
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Heathy</div>
              <div class="col-md-9 product-info">
                @foreach($product->heathyCatalogs as $heathyCatalog)
                <p>{{ $heathyCatalog->heath_catalog }}</p>
                @endforeach
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Description</div>
              <div class="col-md-9 product-info">{!! nl2br(e($product->describe)) !!}</div>
            </div>
          </div>
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
                    <input class="form-control bg-dark" type="file" id="formFile0" name="main_image">
                    <img id="previewImage0" src="{{ asset('storage/products/' . $product->image) }}" alt="Product Image" width="100px" ><br>

                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 1</label>
                    <input class="form-control bg-dark" type="file" id="formFile1" name="image_1">
                    @if($product->images()->count() > 0)
                        <img id="previewImage1" src="{{ asset('storage/products/' . $product->images()->first()->image) }}" alt="Product Image" width="100px"><br>
                    @else
                        <img id="previewImage1" src="#" alt="Product Image" width="100px"><br>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 2</label>
                    <input class="form-control bg-dark" type="file" id="formFile2" name="image_2">
                    @if($product->images()->count() > 1)
                        <img id="previewImage2" src="{{ asset('storage/products/' . $product->images()->skip(1)->first()->image) }}" alt="Product Image" width="100px"><br>
                    @else
                        <img id="previewImage2" src="#" alt="Product Image" width="100px"><br>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 3</label>
                    <input class="form-control bg-dark" type="file" id="formFile3" name="image_3">
                    @if($product->images()->count() > 2)
                        <img id="previewImage3" src="{{ asset('storage/products/' . $product->images()->skip(2)->first()->image) }}" alt="Product Image" width="100px"><br>
                    @else
                        <img id="previewImage3" src="#" alt="Product Image" width="100px"><br>
                    @endif
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
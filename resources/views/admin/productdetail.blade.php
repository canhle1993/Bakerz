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
<div class="container-fluid pt-4 px-4">
    <div class="row pt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">{{$product->product_name}}</h6>
                <div class="row">
                    <div class="col-md-4">
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2"><br>
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2"><br>
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2"><br>
                    </div>
                    <div class="col-md-8">aaaaaaaaaaaaa</div>
                </div>
                <!-- <dl class="row mb-0">
                    <dt class="col-sm-4">
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2">    
                    </dt>
                    <dd class="col-sm-8">A description list is perfect for defining terms.
                        <br>A description list is perfect for defining terms.
                        <br>A description list is perfect for defining terms.
                    </dd>
                    
                </dl>
                <dl class="row mb-0">
                    <dt class="col-sm-4">
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2">    
                    </dt>
                    <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                    <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                    <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                </dl>
                <dl class="row mb-0">
                    <dt class="col-sm-4">
                    <img src="https://product.hstatic.net/1000141988/product/banh_kem_trai_cay_001_247b645214894f23be7a1964af33b092_1024x1024.png" alt="Hình ảnh" style="width:70%"  class="mt-2">    
                    </dt>
                    <dd></dd>
                </dl> -->
                
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

</body>

</html>
@endsection
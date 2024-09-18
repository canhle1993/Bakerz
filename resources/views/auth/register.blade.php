<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakerz</title>

    <!-- For favicon png -->
    <!-- <link
      rel="shortcut icon"
      type="image/icon"
      href="https://tinyurl.com/mtk3ev7w"
    /> -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body style="background-color: #EEEEEE;">
<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px; background-color: #424242;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-white text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <!-- Display Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Display New Password -->
                @if (session('new_password'))
                    <div class="alert alert-success">
                        Your new password is: <strong>{{ session('new_password') }}</strong>
                    </div>
                @endif

                <!-- Registration Form -->
                <form method="POST" action="{{ route('register') }}" class="mx-1 mx-md-4">
                    @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <label class="form-label text-white" for="email">Họ Và Tên</label >
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label text-white" for="name">Số Điện Thoại</label>
                          <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required autofocus />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label text-white" for="name">Địa Chỉ</label>
                          <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required autofocus />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label text-white" for="email">Email</label >
                          <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label text-white" for="password">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required />
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label text-white" for="password_confirmation">Repeat your password</label>
                          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
                        </div>
                    </div>
                    
                    <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                        <label class="form-check-label text-white" for="form2Example3">
                          I agree to all statements in <a href="#!">Terms of service</a>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Tạo Tài Khoản</button>
                    </div>
                    <a
                        href="{{ route('login') }}"
                        class="link-secondary text-decoration-none text-primary"
                        >Login</a>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="backend/images/logo.png" class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

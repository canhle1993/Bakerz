<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bakerz</title>

    <!-- For favicon png -->
    <!-- <link
      rel="shortcut icon"
      type="image/icon"
      href="https://tinyurl.com/mtk3ev7w"
    /> -->
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <section class="vh-100" style="background-color: #eeeeee">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div
              class="card"
              style="border-radius: 1rem; background-color: #424242"
            >
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="backend/images/logo.png"
                    alt="login form"
                    class="img-fluid"
                    style="
                      border-radius: 1rem 0 0 1rem;
                      height: 632px !important;
                    "
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
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

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('auth.Changed')}}">
                      @csrf

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i
                          class="fas fa-cubes fa-2x me-3"
                          style="color: #ff6219"
                        ></i>
                        <span class="text-white h1 fw-bold mb-0"
                          >Bakerz Bite</span
                        >
                      </div>

                      <h5
                        class="text-white fw-normal mb-3 pb-3"
                        style="letter-spacing: 1px"
                      >
                        Change Password
                      </h5>
                      <div class="form-outline mb-4">
                        <label class="text-white form-label" for="form2Example27">Mật Khẩu Cũ</label>
                        <input type="password" id="oldpassword" class="form-control form-control-lg" name="oldpassword" required />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="text-white form-label" for="form2Example27">Mật Khẩu Mới</label>
                        <input type="password" id="newpassword" class="form-control form-control-lg" name="newpassword" required />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="text-white form-label" for="form2Example27">Nhập Lại Mật Khẩu Mới</label>
                        <input type="password" id="newpassword_confirmation" class="form-control form-control-lg" name="newpassword_confirmation" required />
                      </div>
                      <div class="pt-1 mb-4">
                        <button
                          style="width: 100% !important"
                          class="btn btn-dark btn-lg btn-block"
                          type="submit"
                        >
                          Đổi Mật Khẩu
                        </button>
                      </div>
                    </form>
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

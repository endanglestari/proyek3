<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Vegefoods</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-3 text-center">
                <h1>Selamat Datang </h1>
                <h6 class="font-weight-light">Mendaftar itu mudah. Hanya perlu beberapa langkah</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Sukabangun Dalam</option>
                      <option>Sukabangun Luar</option>
                      <option>Kalinilam</option>
                      <option>Payak Kumang</option>
                      <option>Sukaharja</option>
                      <option>Sungai Awan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Saya setuju dengan semua Syarat & Ketentuan </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{url('login')}}">SIGN UP</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Sudah memiliki akun? <a href="{{url('login')}}" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('public')}}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('public')}}/assets/js/off-canvas.js"></script>
    <script src="{{url('public')}}/assets/js/hoverable-collapse.js"></script>
    <script src="{{url('public')}}/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>4 factors | Login Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <form action="{{ url('admin/loginProcess') }}" method="POST">
                                @if (Session::has('fail'))
                                    <div> class= "alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="brand-logo">
                                    <img src="../admin/images/shark_logo.jpg" alt="logo">
                                </div>
                                <h4>Hello!</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                <div class="pt-3">
                                    <div class="form-group">
                                        <label for="uname"><b>Username</b></label>
                                        <input type="text" class="form-control form-control-lg" id="username"
                                            name="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="psw"><b>Password</b></label>
                                        <input type="password" class="form-control form-control-lg" id="password" name="password"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary submit-btn btn-block">SIGN
                                            IN</button>
                                       
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                        <div class="container">
                                            <span class="psw">Forgot <a href="#">password?</a></span>
                                        </div>
                                    </div>
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
    <script src="../admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../admin/js/off-canvas.js"></script>
    <script src="../admin/js/hoverable-collapse.js"></script>
    <script src="../admin/js/template.js"></script>
    <script src="../admin/js/todolist.js"></script>
    <!-- endinject -->

</body>


</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Edit branch</title>
    <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="ti-view-list"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <i class="ti-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="admin/images/shark_logo.jpg" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a href="{{url('admin/login')}}" class="dropdown-item">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="ti-view-list"></span>
          </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item"><a class="nav-link" href="{{url('admin/index')}}">
              <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                  <span class="menu-title">Product Management</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{url('product-list')}}">Edit/Delete</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{url('product-add')}}">Add New</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{url('product-list')}}">Product List</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                  <span class="menu-title">Category Management</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('category-list')}}">Edit/Delete</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('category-add')}}">Add New</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('category-list')}}">Category List</a></li>
                    </ul>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                  <span class="menu-title">Customer Management</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{url('admin/customer-list')}}">Delete</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{url('admin/customer-list')}}">Customer List</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                  <span class="menu-title">Branch Management</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('branch-list')}}">Edit/Delete</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('branch-add')}}">Add New</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('branch-list')}}">Branch List</a></li>
                    </ul>
                  </div>
              </li>

            </ul>
          </nav>
        <div class="container mt-3" style="margin-top:20px">
            <h2>Edit branch</h2>
            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
            @foreach ($customer as $data )
            <?php if($data->customerID == $_GET['id']) : ?>
            <form action="{{url('branch-update')}}" method="POST">
                @csrf
                  <div class="mb-3 mt-3">
                      <label for="id">customer ID:</label>
                      <input type="text" class="form-control" id="id"
                             value="{{$data->customerID}}" readonly name="id">
                  </div>
                  <div class="mb-3">
                      <label for="name">Customer Name:</label>
                      <input type="text" class="form-control" id="name"
                             value="{{$data->customerName}}" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email"
                            value="{{$data->customerEmail}}" name="email">
                           @error('email')
                           <div> class "alert alert-danger" role "alert">
                            {{$message}}
                           @enderror
                  </div>
                  <div class="mb-3">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address"
                            value="{{$data->customerAddress}}" name="address">
                           @error('address')
                           <div> class "alert alert-danger" role "alert">
                            {{$message}}
                           @enderror
                  </div>
                  <div class="mb-3">
                      <label for="phone">Phonenumber:</label>
                      <input type="number" class="form-control" id="number"
                             value="{{$data->customerPhonenumber}}" name="phonenumber">
                  </div>
                  <div class="mb-3">
                      <label for="phone">Password:</label>
                      <input type="number" class="form-control" id="password"
                             value="{{$data->customerPassword}}" name="password">
                  </div>


              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{url('branch-list')}}" class="btn btn-success">Back</a>
          </form>
        <?php endif; ?>
        @endforeach
    </div>
</body>

</html>

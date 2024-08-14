<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Category list</title>
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
                          <li class="nav-item"> <a class="nav-link" href="{{url('category-list')}}">Delete</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{url('category-list')}}">Customer List</a></li>
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
        <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="container mt-3" style= "margin-top: 20px">
                    <table class="table">


                        <thead>
                        <tr>
                            <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $cat)
                            <tr>
                                <th scope="row">{{$cat-> categoriesID}}</th>
                                <td>{{$cat-> categoriesName}}</td>
                                <td>{{$cat-> categoriesDecriptions}}</td>
                                

                                <td>
                                    <a href="{{url("category-edit?id={$cat-> categoriesID}")}}" class="btn btn-info">Edit</a>
                                    <a href="{{url("category-delete")}}\{{$cat-> categoriesID}}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 4-factors 2023</span>

            </div>
        </footer>
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>

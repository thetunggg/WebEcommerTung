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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
    <div class="container mt-3" style= "margin-top: 20px">
        <table class="table">
            <h2>Customer List</h2>
 
            <thead>
              <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Customer Password</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $cus )
                <tr>
                    <th scope="row">{{$cus-> customerID}}</th>
                    <td>{{$cus-> customerPassword}}</td>
                    <td>{{$cus-> customerEmail}}</td>
                    <td>{{$cus-> customerName}}</td>
                    <td>{{$cus-> customerAddress}}</td>
                    <td>{{$cus-> customerPhonenumber}}</td>
                     <td>
                     <a href="{{url("customer-delete")}}\{{$cus-> customerID}}" class="btn btn-danger">Delete</a>
                    </td> 
                </tr>
                @endforeach
            </tbody>
          </table>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>

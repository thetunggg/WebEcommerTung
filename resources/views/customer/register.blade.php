<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sleek Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../customer/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <style>
    /* Add your additional styles here */
    /* You can customize the styles further if needed */
    .register-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .register-text {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="register-form">
<form class ="register"action="{{url('customer/processRegister')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Full Name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" required />
      </div>
      <!-- <div class="form-group">
        <label for="address">Address</label>
        <input class="form-control" type="text" name="address" id="address" placeholder="What is Your Address" required />
      </div> -->
     
      <div class="form-group">
        <label for="Phone">Phone</label>
        <input class="form-control" type="text" name="phone" id="Phone" placeholder="Enter Your Phone" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" />
          </li>
          <li>
            <a class="signup__link" href="#">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
<!-- partial -->
  
</body>
</html>
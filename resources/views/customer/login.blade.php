<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Sleek Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../customer/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <form class="login-form" action="{{ route('customer-loginprocess') }}" method="POST">
        @if (Session::has('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif
        @csrf
        <p class="login-text">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
        </p>
        <input type="username" class="username" type="text" id="username" name="username" id="username"
            placeholder="username" />
        <input type="password" class="password" type="password" id="password" name="password" id="password"
            placeholder="password" />
        <input type="submit" name="Login" value="Login" class="login-submit" />

        <a href="#" class="login-forgot-pass">forgot password?</a>
        <div class="underlay-photo"></div>
        <div class="underlay-black"></div>
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{asset('/css/style.css') }}">
  </head>
  <body>
    <div class="signup">
      <h1 class="signup-heading">Đăng nhập</h1>   
      <form action="#" class="signup-form" autocomplete="off">
        <input type="username" id="Username" name="ipUsername" class="signup-input" placeholder="Tên đăng nhập">
        <input type="password" id="Password" name="ipPassword" class="signup-input" placeholder="Mật khẩu">
        <button id="Login" name="btnlogin" class="signup-submit">Đăng nhập</button>
      </form>
      <p class="signup-already">
        <a href="#" class="signup-login-link">Quên mật khẩu </a> |
        <a href="#" class="signup-login-link">Đăng ký</a>
      </p>
    </div>
  </body>
</html>

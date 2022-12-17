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
      <h1 class="signup-heading">Đăng ký</h1>   
      <form action="#" class="signup-form" autocomplete="off">
        <input type="name" id="name" name="ipName" class="signup-input" placeholder="Họ và tên">
        <input type="username" id="Username" name="ipUsername" class="signup-input" placeholder="Tên đăng nhập">
        <input type="password" id="Password" name="ipPassword" class="signup-input" placeholder="Mật khẩu">
        <input type="Enter-the-password" id="Enter-the-password" name="ipEnter-the-password" class="signup-input" placeholder="Nhập lại mật khẩu">
        <input type="position" id="Position" name="ipPosition" class="signup-input" placeholder="Chức vụ">
        <input type="phonenumber" id="Phonenumber" name="ipPhonenumber" class="signup-input" placeholder="Số điện thoại">
        <input type="group" id="Group" name="ipGroup" class="signup-input" placeholder="Nhóm">
        <input type="address" id="Address" name="ipAddress" class="signup-input" placeholder="Địa chỉ công tác">
        <button id="Login" name="btnlogin" class="signup-submit">Đăng ký</button>
      </form>
      </p>
    </div>
  </body>
</html>

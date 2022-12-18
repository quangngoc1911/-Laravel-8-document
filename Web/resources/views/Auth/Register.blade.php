@extends('\Share\Layout_Header')
@section('content')
<div class="signup">
  @if($errors->any())
    @foreach($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <h1 class="signup-heading">Đăng ký</h1>   
  <form  action="{{ route('register.action') }}" method="POST" class="signup-form" autocomplete="off">
    @csrf
    <input type="text" id="name" name="HoVaTen" class="signup-input" placeholder="Họ và tên">
    <input type="text" id="Username" name="TenDN" class="signup-input" placeholder="Tên đăng nhập">
    <input type="password" id="Password" name="password" class="signup-input" placeholder="Mật khẩu">
    <input type="password" id="Enter-the-password" name="password_confirm" class="signup-input" placeholder="Nhập lại mật khẩu">
    <button id="Login" name="btnlogin" class="signup-submit">Đăng ký</button>
  </form>
  </p>
</div>
@endsection
@extends('\Share\Layout_Header')
@section('content')
  
<div class="signup">
  @if(session('success'))
      <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
      @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
      @endforeach
    @endif
  <h1 class="signup-heading">Đăng nhập</h1>   
  <form action="{{ route('login.action') }}" method="POST" class="signup-form" autocomplete="off">
    @csrf
    <input type="text" id="Username" name="TenDN" class="signup-input" placeholder="Tên đăng nhập">
    <input type="password" id="Password" name="password" class="signup-input" placeholder="Mật khẩu">
    <button id="Login" name="btnlogin" class="signup-submit">Đăng nhập</button>
  </form>
  <p class="signup-already">
    <a href="#" class="signup-login-link">Quên mật khẩu </a> |
    <a href="{{ route('register') }}" class="signup-login-link">Đăng ký</a>
  </p>
</div>

@endsection


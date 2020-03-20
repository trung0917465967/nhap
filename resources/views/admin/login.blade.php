@extends('admin.layout.layout')
@section('footerScripts')

    @parent

{{--@section('content')--}}
<div class="login-box">
  <h1>Đăng Nhập</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Tài Khoản">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Mật Khẩu">
  </div>
  <input type="button" class="btn" value="Đăng Nhập">
</div>

@endsection

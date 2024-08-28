@extends('layouts.MasterAdmin')

@section('main')

<form action="" method="post" role="form">
    <div class="modal">
        <div class="auth_body">
            <div class="auth_form-form">
                <div class="auth_form-container">
                    <div class="auth-login">
                        <div class="auth-item">
                            <h2 class="auth_heading">Form login admin</h2>
                        </div>
                        <div class="auth-item">
                            <a class="font_x" href="{{route('product.index')}}"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>
                    <div class="auth_form">
                        <div class="auth_form-grup">
                            <input type="text" class="auth_form-input" placeholder="Email" name="email">
                            @error('email')
                            <small>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="auth_form-grup">
                            <input type="password" class="auth_form-input" placeholder="password" name=" password">
                            @error('password')
                            <small>{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="auth_form-aside">
                        <p class="auth_form-text">
                            Bạn đã chắc chắn để đăng ký về
                            <a href="" class="auth_form-link">điều khoản dịch vụ và chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth_form-control">
                        <button type="submit" class="btn-btn btn-sm btn-login">Login</button>
                        <a href="{{route('admin.register')}}" class="btn-btn btn-sm btn-register">Regester</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>
@stop
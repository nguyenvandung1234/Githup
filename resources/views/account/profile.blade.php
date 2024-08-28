

@extends('layouts.main')
@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <span>DESIGNER JEWELRY</span>
                <h2 class="page-title">Profile</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== LOGIN SECTION START ======-->
    <section class="login-sec pt-120 pb-120">
        <div class="container">
            <div class="account-wrapper">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="login-content" style="background-image: url('assets/img/login.png');">
                            <div class="description text-center">
                                <h2>Hello World!</h2>
                                <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form">
                            <h2>Sign Up</h2>
                            <form action="" method="post">
                                <div class="input-group input-group-two mb-20">
                                    <input type="text" value="{{$auth->name}}" placeholder="Username" name="name">
                                </div>
                                <div class="input-group input-group-two mb-20">
                                    <input type="text"  value="{{$auth->email}}" placeholder="Email" name="email">
                                </div>
                                <div class="input-group input-group-two mb-30">
                                    <input type="text"  value="{{$auth->address}}" placeholder="address" name="address">
                                </div>
                                <div class="input-group input-group-two mb-30">
                                    <input type="number" value="{{$auth->phone}}" placeholder="phone" name="phone">
                                </div>
                                <div class="input-group input-group-two mb-30">
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group input-group-two mb-30">
                                    <select name="gender" class="auth_form-input">
                                        <option  value="1" value="{{$auth->gender == 1 ? 'selected' : ''}}">Male</option>
                                        <option value="1" value="{{$auth->gender == 0 ? 'selected' : ''}}"> Fe Male</option>
                                    </select>
                                    @error('gender')
                                    <small>{{$message}}</small>
                                    @enderror
                                </div>
                                <a href="#">Forgot Password?</a>
                                <button type="submit" class="main-btn btn-filled mt-20 login-btn">Signup</button>
                                <div class="form-seperator">
                                    <span>OR</span>
                                </div>
                                <div class="social-buttons">
                                    <button type="button" class="main-btn btn-border facebook mb-20">
                                        <i class="fab fa-facebook-f"></i>
                                         Continue with Facebook
                                    </button>
                                    <button type="button" class="main-btn btn-filled mb-30">
                                        <i class="fab fa-google"></i>
                                         Continue with Google
                                    </button>
                                </div>
                                <p>Already have an Account?
                                <a href="login.html" class="d-inline-block">Login</a>
                                </p>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
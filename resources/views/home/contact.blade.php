@extends('layouts.main')

@section('main')

<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <span>DESIGNER JEWELRY</span>
                <h2 class="page-title">Contact us</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== CONTACT PART START ======-->
    <section class="contact-part pt-115 pb-115">
        <div class="container">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="desc">
                                <h4>Office Address</h4>
                                <p>19/A, Cirikon City hall Tower New York, NYC</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="desc">
                                <h4>Phone Number</h4>
                                <p>+ 97656 8675 7864 7 <br> + 876 766 8675 765 6</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-message"></i>
                            </div>
                            <div class="desc">
                                <h4>Email Address</h4>
                                <p>info@webmail.com <br> jobs.webmail@mail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form class="form_validate ajax_submit form_alert" action="https://metropolitanhost.com/themes/themeforest/html/laramiss/sendmail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" placeholder="Your full name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" placeholder="Enter email address" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" placeholder="Add phone number" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-book"></i></span>
                                <input type="text" placeholder="Select Subject" name="subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group textarea mb-30">
                                <span class="icon"><i class="far fa-pen"></i></span>
                                <textarea placeholder="Enter messages" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Get Free Quote</button>
                            <div class="server_response w-100"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
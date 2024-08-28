@extends('layouts.main')

@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <span>DESIGNER JEWELRY</span>
                <h2 class="page-title">About Us</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ABOUT PART START ======-->
    <section class="about-section pt-115 pb-115">
        <div class="container">
            <div class="video-wrap video-wrap-two video-about mb-60" style="background-image: url(assets/img/text-block/04.jpg);">
                <a href="http://www.youtube.com/embed/watch?v=EEJFMdfraVY" class="popup-video"><i class="fas fa-play"></i></a>
            </div>
            <div class="section-title about-title text-center">
                <span class="title-tag">since <span>1994</span></span>
                <h2>Hello. Our store has been present for over 30 years . We give assurance to all customers.</h2>
            </div>
            <ul class="about-features">
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="#">
                        <i class="flaticon-ring"></i>
                        <i class="hover-icon flaticon-ring"></i>
                        <span class="title">Diamond Ring</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="#">
                        <i class="flaticon-bracelet"></i>
                        <i class="hover-icon flaticon-bracelet"></i>
                        <span class="title">Bracelets</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="#">
                        <i class="flaticon-necklace"></i>
                        <i class="hover-icon flaticon-necklace"></i>
                        <span class="title">Necklaces</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="#">
                        <i class="flaticon-bracelet-2"></i>
                        <i class="hover-icon flaticon-bracelet-2"></i>
                        <span class="title">Pendants</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="#">
                        <i class="flaticon-earrings"></i>
                        <i class="hover-icon flaticon-earrings"></i>
                        <span class="title">Earrings</span>
                    </a>
                </li>
            </ul>
            <div class="about-text-box">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/text-block/05.jpg" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <span>Get 50 % Off</span>
                            <h3>Get All Gold Jewelry At 50 Percent, Grab It Now </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip.
                            </p>
                            <h3>Get All Gold Jewelry At 50 Percent, Grab It Now </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
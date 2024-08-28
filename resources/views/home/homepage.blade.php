@extends('layouts.main')

@section('main')

<!--====== OFF CANVAS END ======-->

<!--====== BANNER PART START ======-->
<section class="banner-area banner-style-one position-relative">

    <!-- Follow Circle -->
    <div class="circle-out"></div>

    <div class="d-none d-md-block vertical-text wow fadeIn" data-wow-delay=".3s">
        <ul>
            <li> <a href="#"> <i class="fab fa-facebook"></i> Facebook </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> Instagram </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> Twitter </a> </li>
        </ul>
    </div>

    <div class="d-none d-md-block vertical-text right wow fadeIn" data-wow-delay=".3s">
        <span>Call us on: </span>
        <span>+123 456 789</span>
    </div>

    <div class="container container-custom-two">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="banner-content">
                    <span class="promo-tag wow fadeInDown" data-wow-delay=".3s">Jewelry Design With Love</span>
                    <h1 class="title wow fadeInLeft" data-wow-delay=".5s">High-End <br>Jewelry Items</h1>
                    <ul>
                        <li>
                            <a class="main-btn btn-filled wow fadeInUp" data-wow-delay=".7s"
                                href="{{route('view.cart')}}">Buy Now </a>
                        </li>
                        <li>
                            <a class="main-btn btn-border wow fadeInUp" data-wow-delay=".9s" href="{{route('home.about')}}">Explore Now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
                <div class="banner-thumb d-none d-md-block">
                    <div class="hero-slider-one">
                        <div class="single-thumb">
                            <img src="assets/img/banner/01.jpg" alt="images">
                        </div>
                        <div class="single-thumb">
                            <img src="assets/img/banner/02.jpg" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== BANNER PART ENDS ======-->
<!--====== Category START ======-->
<div class="categories-box-layout">
    <div class="container">
        <div class="categories-box-layout-inner">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('home.shop_left')}}" class="categories-box">
                        <span class="icon">
                            <i class="flaticon-bracelet"></i>
                        </span>
                        <h5 class="title">Golden Pendants</h5>
                        <p>12 Products</p>
                        <span class="overlay-icon">
                            <i class="flaticon-bracelet"></i>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('home.shop_left')}}" class="categories-box">
                        <span class="icon">
                            <i class="flaticon-ring"></i>
                        </span>
                        <h5 class="title">Diamond Rings</h5>
                        <p>27 Products</p>
                        <span class="overlay-icon">
                            <i class="flaticon-ring"></i>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('home.shop_left')}}" class="categories-box">
                        <span class="icon">
                            <i class="flaticon-necklace"></i>
                        </span>
                        <h5 class="title">Gold Necklaces</h5>
                        <p>18 Products</p>
                        <span class="overlay-icon">
                            <i class="flaticon-necklace"></i>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('home.shop_left')}}" class="categories-box">
                        <span class="icon">
                            <i class="flaticon-earrings"></i>
                        </span>
                        <h5 class="title">Designer Earings</h5>
                        <p>23 Products</p>
                        <span class="overlay-icon">
                            <i class="flaticon-earrings"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-115 pb-115 bg-white">
    <div class="container">
        <div class="section-title text-center mb-30">
            <div class="section-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="45" height="45" x="0" y="0"
                    viewBox="0 0 512 512" xml:space="preserve" class="">
                    <path
                        d="M369.853,250.251l-100-241C267.53,3.65,262.062,0,255.999,0s-11.531,3.65-13.854,9.251l-100,241    c-1.527,3.681-1.527,7.817,0,11.498l100,241c2.323,5.601,7.791,9.251,13.854,9.251s11.531-3.65,13.854-9.251l100-241    C371.381,258.068,371.381,253.932,369.853,250.251z M255.999,457.861L172.239,256l83.76-201.861L339.759,256L255.999,457.861z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-1"
                        d="M139.606,118.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C145.465,133.748,145.465,124.25,139.606,118.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-2"
                        d="M456.607,55.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394l63-63C462.465,70.748,462.465,61.25,456.607,55.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-3"
                        d="M139.606,372.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    C58.322,459.535,62.16,461,65.999,461s7.678-1.465,10.607-4.394l63-63C145.465,387.748,145.465,378.25,139.606,372.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-4"
                        d="M456.607,435.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C462.465,450.748,462.465,441.25,456.607,435.393z"
                        fill="#ffffff" />
                </svg>
            </div>
            <span class="title-tag"> avail our offer </span>
            <h2>Trending Collection</h2>
        </div>
        <div class="text-center mb-20">
            <a href="#">View more
                <i class="fal fa-arrow-right ml-2"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="apartment-box">
                    <div class="image-box">
                        <a href="shop-detail.html" class="d-block">
                            <img src="assets/img/room-suite/01.jpg" alt="img">
                        </a>
                    </div>
                    <div class="content-box-2">
                        <h3 class="title">
                            <a href="shop-detail.html">Wedding Ring</a>
                        </h3>
                        <p>Machine Design , 24 Carat</p>
                        <span class="price">$345/10gm </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="apartment-box">
                    <div class="image-box">
                        <a href="shop-detail.html" class="d-block">
                            <img src="assets/img/room-suite/02.jpg" alt="img">
                        </a>
                    </div>
                    <div class="content-box-2">
                        <h3 class="title">
                            <a href="shop-detail.html">Gold Neckless</a>
                        </h3>
                        <p>Machine Design , 24 Carat</p>
                        <span class="price">$345/10gm </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="apartment-box">
                    <div class="image-box">
                        <a href="shop-detail.html" class="d-block">
                            <img src="assets/img/room-suite/03.jpg" alt="img">
                        </a>
                    </div>
                    <div class="content-box-2">
                        <h3 class="title">
                            <a href="shop-detail.html">Barry Gold Bangle </a>
                        </h3>
                        <p>Machine Design , 24 Carat</p>
                        <span class="price">$345/10gm </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="apartment-box">
                    <div class="image-box">
                        <a href="shop-detail.html" class="d-block">
                            <img src="assets/img/room-suite/01.jpg" alt="img">
                        </a>
                    </div>
                    <div class="content-box-2">
                        <h3 class="title">
                            <a href="shop-detail.html">Gold Earring </a>
                        </h3>
                        <p>Machine Design , 24 Carat</p>
                        <span class="price">$345/10gm </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-115 pb-115 container-wide restaurant-tab-area position-relative">

    <img src="assets/img/texture-1.png" alt="texture" class="texture-1">

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <span class="title-tag">Buy Now</span>
                        <h2>Bestselling Products </h2>
                    </div>
                    <p class="pr-50">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, aliquip ex ea commodo consequat you
                        have to understand this.
                    </p>
                    <a href="shop-left.html" class="main-btn btn-filled mt-40">Shop now</a>
                </div>
            </div>

            <div class="px-2 w-100">
                <div class="row wide-shop-post-slider mt-80">
                    @foreach ($pro as $row)

                    <div class="col-12">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="/images/{{$row->image}}" height="330px" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                    <a href="{{route('add.cart',$row->id)}}"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}">{{$row->name}}</a>
                                </h4>
                                <span class="price">${{$row->sale_price}} <span>${{$row->price}}</span></span>
                                <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}" class="link"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>

<!--====== SHOP PART START ======-->
<section class="restaurant-tab-area pb-90">
    <div class="container">
        <div class="section-title mb-50">
            <span class="title-tag"> Categories </span>
            <h2>Our Categories</h2>
        </div>
        <ul class="restaurant-rood-list row justify-content-center nav nav-pills mb-30" id="restaurant-tab"
            role="tablist">
            @foreach($cate as $row)
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" href="{{route('home.category',$row->id)}}">
                    <i class="flaticon-ring"></i>
                    <span class="title">{{$row->name}}</span>
                </a>
            </li>
            @endforeach
        </ul>
        <!-- tab content -->
        <div class="tab-content " id="restaurant-tabContent">
            <div class="tab-pane fade" id="italian" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Ankle Bracelet</a>
                                </h4>
                                <span class="price">$390 <span>$480</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="chicken" role="tabpanel">
                <div class="row">
                    @foreach($produ as $row)
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="/images/{{$row->image}}" height="330px" alt="images">
                                <div class="badges">
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                    <a href="{{route('add.cart',$row->id)}}"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">{{$row->name}}</a>
                                </h4>
                                <span class="price">$890 <span>$900</span></span>
                                <a href="/detail/{{$row->name}}_{{$row->id}}" class="link"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade " id="coffee" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Ankle Bracelet</a>
                                </h4>
                                <span class="price">$390 <span>$480</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/02.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Stud Earrings </a>
                                </h4>
                                <span class="price">$290 <span>$300</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/03.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Crumpled Ring </a>
                                </h4>
                                <span class="price">$450 <span>$510</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Golden Pendant</a>
                                </h4>
                                <span class="price">$780 <span>$800</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="bake-cake" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Ankle Bracelet</a>
                                </h4>
                                <span class="price">$390 <span>$480</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/02.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Stud Earrings </a>
                                </h4>
                                <span class="price">$290 <span>$300</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/03.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Crumpled Ring </a>
                                </h4>
                                <span class="price">$450 <span>$510</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Golden Pendant</a>
                                </h4>
                                <span class="price">$780 <span>$800</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="cokkies" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Ankle Bracelet</a>
                                </h4>
                                <span class="price">$390 <span>$480</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/02.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Stud Earrings </a>
                                </h4>
                                <span class="price">$290 <span>$300</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/03.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Crumpled Ring </a>
                                </h4>
                                <span class="price">$450 <span>$510</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Golden Pendant</a>
                                </h4>
                                <span class="price">$780 <span>$800</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="coctail" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Ankle Bracelet</a>
                                </h4>
                                <span class="price">$390 <span>$480</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/02.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Stud Earrings </a>
                                </h4>
                                <span class="price">$290 <span>$300</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/03.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">New</span>
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Crumpled Ring </a>
                                </h4>
                                <span class="price">$450 <span>$510</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="assets/img/shop/01.jpg" alt="images">
                                <div class="badges">
                                    <span class="price">Sale</span>
                                    <span class="price discounted">-15%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">Golden Pendant</a>
                                </h4>
                                <span class="price">$780 <span>$800</span></span>
                                <a href="shop-detail.html" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- OUR PRODUCT -->
<section class="restaurant-tab-area pt-115 pb-85">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="45" height="45" x="0" y="0"
                    viewBox="0 0 512 512" xml:space="preserve" class="">
                    <path
                        d="M369.853,250.251l-100-241C267.53,3.65,262.062,0,255.999,0s-11.531,3.65-13.854,9.251l-100,241    c-1.527,3.681-1.527,7.817,0,11.498l100,241c2.323,5.601,7.791,9.251,13.854,9.251s11.531-3.65,13.854-9.251l100-241    C371.381,258.068,371.381,253.932,369.853,250.251z M255.999,457.861L172.239,256l83.76-201.861L339.759,256L255.999,457.861z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-1"
                        d="M139.606,118.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C145.465,133.748,145.465,124.25,139.606,118.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-2"
                        d="M456.607,55.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394l63-63C462.465,70.748,462.465,61.25,456.607,55.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-3"
                        d="M139.606,372.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    C58.322,459.535,62.16,461,65.999,461s7.678-1.465,10.607-4.394l63-63C145.465,387.748,145.465,378.25,139.606,372.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-4"
                        d="M456.607,435.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C462.465,450.748,462.465,441.25,456.607,435.393z"
                        fill="#ffffff" />
                </svg>
            </div>
            <span class="title-tag"> Featured </span>
            <h2>Our Products</h2>
        </div>
        <div class="row">
            <!-- FOREACH -->
            @foreach($produ as $row)
            <div class="col-lg-3 col-6">
                <div class="food-box shop-box">
                    <div class="thumb">
                        <img src="/images/{{$row->image}}" height="330px" alt="images">
                        <div class="badges">
                            <span class="price">Sale</span>
                            <span class="price discounted">-15%</span>
                        </div>
                        <div class="button-group">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="far fa-sync-alt"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quickViewModal"><i class="far fa-eye"></i></a>
                            <a href="{{route('add.cart',$row->id)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h4>
                            <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}">{{$row->name}}</a>
                        </h4>
                        <span class="price">${{$row->sale_price}} <span>${{$row->price}}</span></span>
                        <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}" class="link"><i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- END FOREACH -->
            @endforeach
        </div>
    </div>
</section>
<!-- OUR PRODUCT END -->

<section class="restaurant-tab-area bg-white pt-115 pb-85">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="45" height="45" x="0" y="0"
                    viewBox="0 0 512 512" xml:space="preserve" class="">
                    <path
                        d="M369.853,250.251l-100-241C267.53,3.65,262.062,0,255.999,0s-11.531,3.65-13.854,9.251l-100,241    c-1.527,3.681-1.527,7.817,0,11.498l100,241c2.323,5.601,7.791,9.251,13.854,9.251s11.531-3.65,13.854-9.251l100-241    C371.381,258.068,371.381,253.932,369.853,250.251z M255.999,457.861L172.239,256l83.76-201.861L339.759,256L255.999,457.861z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-1"
                        d="M139.606,118.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C145.465,133.748,145.465,124.25,139.606,118.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-2"
                        d="M456.607,55.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394l63-63C462.465,70.748,462.465,61.25,456.607,55.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-3"
                        d="M139.606,372.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    C58.322,459.535,62.16,461,65.999,461s7.678-1.465,10.607-4.394l63-63C145.465,387.748,145.465,378.25,139.606,372.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-4"
                        d="M456.607,435.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C462.465,450.748,462.465,441.25,456.607,435.393z"
                        fill="#ffffff" />
                </svg>
            </div>
            <span class="title-tag"> Latest </span>
            <h2>On Sale Products</h2>
        </div>
        <div class="row">
            @foreach($produ as $row)
            <div class="col-lg-3 col-6">
                <div class="food-box shop-box shop-box-2">
                    <div class="thumb">
                        <img src="/images/{{$row->image}}" height="300px" alt="images">
                        <div class="button-group">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="far fa-sync-alt"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quickViewModal"><i class="far fa-eye"></i></a>
                        </div>
                        <div class="cart-block">
                            <a href="{{route('add.cart',$row->id)}}">Add to Cart</a>
                        </div>
                    </div>
                    <div class="desc">
                        <h4 class="mb-0">
                            <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}">{{$row->name}}</a>
                        </h4>
                        <span class="price">${{$row->sale_price}}</span>
                        <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}" class="link"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="pt-115 pb-115 bg-white room-type-section style-2">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="45" height="45" x="0" y="0"
                    viewBox="0 0 512 512" xml:space="preserve" class="">
                    <path
                        d="M369.853,250.251l-100-241C267.53,3.65,262.062,0,255.999,0s-11.531,3.65-13.854,9.251l-100,241    c-1.527,3.681-1.527,7.817,0,11.498l100,241c2.323,5.601,7.791,9.251,13.854,9.251s11.531-3.65,13.854-9.251l100-241    C371.381,258.068,371.381,253.932,369.853,250.251z M255.999,457.861L172.239,256l83.76-201.861L339.759,256L255.999,457.861z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-1"
                        d="M139.606,118.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C145.465,133.748,145.465,124.25,139.606,118.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-2"
                        d="M456.607,55.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394l63-63C462.465,70.748,462.465,61.25,456.607,55.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-3"
                        d="M139.606,372.393c-5.858-5.857-15.356-5.857-21.213,0l-63,63c-5.858,5.858-5.858,15.356,0,21.213    C58.322,459.535,62.16,461,65.999,461s7.678-1.465,10.607-4.394l63-63C145.465,387.748,145.465,378.25,139.606,372.393z"
                        fill="#ffffff" />
                    <path class="diamond-spark spark-4"
                        d="M456.607,435.393l-63-63c-5.858-5.857-15.356-5.857-21.213,0c-5.858,5.858-5.858,15.356,0,21.213l63,63    c2.928,2.929,6.767,4.394,10.606,4.394s7.678-1.465,10.607-4.394C462.465,450.748,462.465,441.25,456.607,435.393z"
                        fill="#ffffff" />
                </svg>
            </div>
            <span class="title-tag"> May Be You Have Earned It </span>
            <h2>On Sale Products</h2>
        </div>
        <div class="row room-items">
            <div class="col-lg-6">
                <div class="room-box extra-height">
                    <div class="room-bg" style="background-image: url(assets/img/room-type/03.jpg);">
                    </div>
                    <div class="room-content">
                        <h3><a href="shop-detail.html">Ariel Ring</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore
                            magna aliqua.</p>
                    </div>
                    <a href="shop-detail.html" class="room-link"><i class="fal fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="room-box">
                            <div class="room-bg" style="background-image: url(assets/img/room-type/01.jpg);">
                            </div>
                            <div class="room-content">
                                <h3><a href="shop-detail.html">Agonfly Jewelry</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore magna aliqua.</p>
                            </div>
                            <a href="" class="room-link"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="room-box">
                            <div class="room-bg" style="background-image: url(assets/img/room-type/02.jpg);">
                            </div>
                            <div class="room-content">
                                <h3><a href="shop-detail.html">Coin Gold Necklace</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore magna aliqua.</p>
                            </div>
                            <a href="" class="room-link"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SHOP SECTION STYLE 2 END ======-->
<!--====== COUNTER UP START ======-->
<section class="counter-section">
    <div class="container">
        <div class="counter-inner pt-100 pb-60">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-11">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="counter-box box-layout d-flex justify-content-center justify-content-lg-start">
                                <div>
                                    <div class="icon">
                                        <i class="flaticon-bracelet-1"></i>
                                    </div>
                                    <h4><span class="counter">84</span>k<span class="plus-icon">+</span></h4>
                                    <span class="title">Jewelriess in Album</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="counter-box box-layout d-flex justify-content-center">
                                <div>
                                    <div class="icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <h4><span class="counter">10</span>M<span class="plus-icon">+</span></h4>
                                    <span class="title">Happy Feedbacks </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="counter-box box-layout d-flex justify-content-center">
                                <div>
                                    <div class="icon">
                                        <i class="flaticon-earrings"></i>
                                    </div>
                                    <h4><span class="counter">02</span>k<span class="plus-icon">+</span></h4>
                                    <span class="title">Categories Served</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="counter-box box-layout d-flex justify-content-center justify-content-lg-end">
                                <div>
                                    <div class="icon">
                                        <i class="flaticon-user-1"></i>
                                    </div>
                                    <h4><span class="counter">100</span>M<span class="plus-icon">+</span></h4>
                                    <span class="title">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
@extends('layouts.shop')

@section('main')

<div class="container d-none  d-lg-block">
    <div class="row">
        <aside class="sidebar-home col-lg-3 mobile-sidebar toggle-menu-wrap">
            <div class="side-menu-wrapper text-uppercase d-none d-lg-block">
                <h2 class="side-menu-title">
                    <a class="d-block btn-dark" href="#">
                        <i class="fas fa-bars"></i>Danh mục sản phẩm
                    </a>
                </h2>

                <nav class="side-nav">
                    <ul class="menu menu-vertical sf-arrows">
                        <li class="active"><a href="{{route('home')}}"><i class="sicon-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="" class="sf-with-ul"><i class="sicon-briefcase"></i>Categories</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        @foreach ($cate as $row)
                                        <a href="{{route('home.category',$row->id)}}" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="">{{$row->name}}</a>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li><a href="{{route('home.product')}}" class="sf-with-ul"><i class="sicon-present"></i>Products</a></li>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End .side-menu-container -->
        </aside>
        <!-- End .col-lg-3 -->
        <div class="col-lg-9">
            <div class="menu-custom-block text-right">
                <a href="#">Woman Shoes</a>
                <a href="#">50% OFF FASHION</a>
                <a target="_blank" href="https://1.envato.market/rNg2d">Buy Porto!</a>
            </div>
        </div>
    </div>
</div>
<div class="row m-b-3">
    <div class="home-slider-container col-lg-9 offset-lg-3">
        <div class="home-slider owl-carousel owl-carousel-lazy owl-theme slide-animate" data-owl-options="{
                            'nav': false
                        }">
            <div class="home-slide banner">
                <a href="demo9-shop.html">
                    <img class="slide-bg" src="../assets/images/demoes/demo9/slider/slide-1.jpg"
                        style="background-color: #ccc;" alt="banner" width="835" height="410" />
                </a>
                <div class="banner-layer slide-1 text-xl-right banner-layer-middle">
                    <h4 class="text-xl-right slide-title appear-animate" data-animation-delay="100"
                        data-animation-name="fadeInUpShorter">Find the Boundaries. Push Through!</h4>
                    <h2 class="text-xl-right text-uppercase sub-title appear-animate" data-animation-delay="300"
                        data-animation-name="fadeInUpShorter">Shoes Sale</h2>
                    <div class="row">
                        <div class="col-auto col-md-6 appear-animate" data-animation-delay="500"
                            data-animation-name="fadeInRightShorter">
                            <h3 class="sale-label line-height-1 mb-0 d-inline-block text-center">
                                40<small><sup>%</sup><sub>OFF</sub></small></h3>
                        </div>
                        <div class="col-auto col-md-6 content-right appear-animate" data-animation-delay="700"
                            data-animation-name="fadeInRightShorter">
                            <h4 class="d-inline-block text-left text-uppercase line-height-1 d-inline-block">
                                Starting At</h4>
                            <h5 class="text-left coupon-sale-text">$<b>119</b>99</h5>
                            <div class="mb-0">
                                <a href="demo9-shop.html" class="btn btn-modern btn-md btn-dark">SHOP
                                    NOW!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-slide banner">
                <a href="demo9-shop.html">
                    <img class="slide-bg" src="../assets/images/demoes/demo9/slider/slide-2.jpg"
                        style="background-color: #444;" alt="banner" width="835" height="410" />
                </a>
                <div class="banner-layer slide-2 text-right banner-layer-middle">
                    <div>
                        <h2 class="text-right text-uppercase text-primary ls-n-20 m-b-2 appear-animate"
                            data-animation-delay="100" data-animation-name="fadeInUpShorter">FLASH SALE
                        </h2>
                        <h4 class="text-right m-b-2 appear-animate" data-animation-delay="300"
                            data-animation-name="fadeInUpShorter">TOP BRANDS<br>SUMMER SUNGLASSES
                        </h4>
                        <h3 class="text-right text-uppercase text-light ls-n-20 m-b-4 appear-animate"
                            data-animation-delay="500" data-animation-name="fadeInUpShorter">
                            STARTING<br>AT<sup class="pl-2 ml-1">$</sup>199<sup>99</sup></h3>
                        <div class="pt-1">
                            <a href="demo9-shop.html" class="btn btn-modern btn-lg btn-light appear-animate"
                                data-animation-delay="700" data-animation-name="fadeInUpShorter">View
                                Sale</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .home-slider -->
    </div>
    <!-- End .col-lg-9 -->
</div>
<section class="featured-products-section">
    <h2 class="section-title title-decorate text-center d-flex align-items-center appear-animate"
        data-animation-delay="100" data-animation-duration="1500">SẢN PHẨM NỔI BẬT</h2>

    <div class="owl-carousel owl-theme nav-image-center" data-owl-options="{
                            'margin': 20,
                            'dots': false,
                            'nav': true,
                            'loop': false,
                            'autoplay': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '1200': {
                                    'items': 4
                                }
                            }
                        }">
        @foreach ($pro as $row)
        <div class="product-default left-details">
            <div class="post">
                <figure>
                    <a href="/detail/{{\Str::slug($row->name)}}_{{$row->id}}">
                        <img class="post-img" src="/images/{{$row->image}}" alt="product" style="height: 260px;">
                    </a>
                    <div class="label-group">
                        <span class="product-label label-hot">HOT</span>
                    </div>

                </figure>
                <div class="product-details">
                    <div class="category-list">
                        <a href="demo9-shop.html" class="product-category">clothing</a>,
                        <a href="demo9-shop.html" class="product-category">shoes</a>
                    </div>
                    <h3 class="product-title"> <a href="demo9-product.html">{{$row->name}}</a> </h3>
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:0%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->
                    </div>
                    <!-- End .product-container -->
                    <div class="price-box">
                        <span class="product-price">${{number_format($row->price)}}</span>
                    </div>
                    <!-- End .price-box -->
                    <div class="product-action">
                        <a href="{{route('add.cart',$row->id)}}" class="btn-icon btn-add-cart "><i
                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- End .product-details -->
            </div>
        </div>
        @endforeach
    </div>

</section>

<!-- Center -->

<div class="home-products-container text-center">
    <div class="row">
        <div class="col-md-6 mb-2 appear-animate" data-animation-delay="200" data-animation-name="fadeIn">
            <div class="home-products bg-gray p-y-5">
                <h3 class="section-sub-title">BEST SELLERS PRODUCTS</h3>

                <div class="owl-carousel owl-theme nav-image-center nav-thin nav-style-1" data-owl-options="{
                                    'dots': false,
                                    'nav': true,
                                    'loop': false,
                                    'autoplay': false,
                                    'responsive': {
                                        '480': {
                                            'items': 1
                                        },
                                        '768': {
                                            'items': 1
                                        }
                                    }
                                }">
                    @foreach ($pro as $row)
                    <div class="product-default pl-3 pr-3 pl-3 pr-3">

                        <figure>
                            <a href="/detail/{{\Str::slug($row->name)}}_{{$row->id}}">
                                <img src="/images/{{$row->image}}" alt="product" width="300" height="260px" />
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="demo9-product.html">{{$row->name}}</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">${{number_format($row->price)}}</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End .col-md-4 -->

        <div class="col-md-6 mb-2 appear-animate" data-animation-delay="500" data-animation-name="fadeIn">
            <div class="home-products bg-gray p-y-5">
                <h3 class="section-sub-title">NEW ARRIVAL PRODUCTS</h3>

                <div class="owl-carousel owl-theme nav-image-center nav-thin nav-style-1" data-owl-options="{
                                    'dots': false,
                                    'nav': true,
                                    'responsive': {
                                        '480': {
                                            'items': 1
                                        },
                                        '768': {
                                            'items': 1
                                        }
                                    }
                                }">
                    @foreach ($pro as $row)
                    <div class="product-default pl-3 pr-3 pl-3 pr-3">
                        <figure>
                            <a href="/detail/{{\Str::slug($row->name)}}_{{$row->id}}">
                                <img src="/images/{{$row->image}}" alt="product" width="300" height="260px" />
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="demo9-product.html">{{$row->name}}</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">${{number_format($row->price)}}</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End .col-md-4 -->
    </div>


    <!-- section -->

    <section class="fashion-products-section pb-2 appear-animate" data-animation-delay="100"
        data-animation-duration="1500">
        <h2 class="section-title title-decorate text-center d-flex align-items-center">LỰA CHỌN SẢN PHẨM
        </h2>
        <div class="owl-carousel owl-theme nav-image-center" data-owl-options="{
                        'margin': 20,
                        'dots': false,
                        'nav': true,
                        'loop': false,
                        'autoplay': false,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '1200': {
                                'items': 4
                            }
                        }
                    }">
            @foreach ($pro as $row)

            <div class="product-default left-details">
                <div class="post">
                    <figure>
                        <a href="/detail/{{\Str::slug($row->name)}}_{{$row->id}}">
                            <img src="/images/{{$row->image}}" alt="product" class="post-img" style="height:260px">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-hot">HOT</span>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-title"> <a href="demo9-product.html">{{$row->name}}</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">${{number_format($row->price)}}</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="{{route('add.cart',$row->id)}}" class="btn-icon btn-add-cart "><i
                                    class=""></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @stop
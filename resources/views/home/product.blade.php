@extends('layouts.shop')

@section('main')


<div class="container d-none  d-lg-block">
        <div class="row">
            <aside class="sidebar-home col-lg-3 mobile-sidebar toggle-menu-wrap">
                <div class="side-menu-wrapper text-uppercase d-none d-lg-block">
                    <h2 class="side-menu-title cursor-pointer">
                        <a class="collpased d-block btn-dark" data-toggle="collapse" href="#side-nav" role="button"
                            aria-expanded="true" aria-controls="side-nav">
                            <i class="fas fa-bars"></i>Danh mục sản phẩm
                        </a>
                    </h2>
                    <div class="collapse w-100 bg-white" id="side-nav">
                        <nav class="side-nav bg-white">
                            <ul class="menu menu-vertical sf-arrows">
                                <li class="active"><a href="{{route('home')}}"><i class="sicon-home"></i>Home</a></li>
                                <li>
                                    <a href="" class="sf-with-ul"><i class="sicon-briefcase"></i>Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    @foreach ($cate as $row)
                                                    <li><a href="{{route('home.category',$row->id)}}">{{$row->name}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .megamenu -->
                                </li>
                                <li><a href="" class="sf-with-ul"><i class="sicon-present"></i>Products</a></li>
                            </ul>
                        </nav>
                    </div>
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
    <hr>
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
                        <img class="post-img" src="/images/{{$row->image}}" alt="product" style="height:250px">
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

<section class="featured-products-section">

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
                        <img class="post-img" src="/images/{{$row->image}}" alt="product" style="height:250px">
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


<section class="featured-products-section">

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
                        <img class="post-img" src="/images/{{$row->image}}" alt="product" style="height:250px">
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


    @stop
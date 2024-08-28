@extends('layouts.main')

@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Shop Left</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== SHOP SECTION START ======-->
<section class="Shop-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Shop Sidebar -->
            <div class="col-lg-4 col-md-10 col-sm-10">
                <div class="sidebar">
                    <!-- About Author Widget -->
                    <!-- Search Widget -->
                    <div class="widget search-widget mb-40">
                        <h5 class="widget-title">Search Objects</h5>
                        <form action="">
                            <input type="text" name="key" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Popular Post Widget -->
                    <div class="widget popular-feeds mb-40">
                        <h5 class="widget-title">Popular Products</h5>
                        <div class="popular-feed-loop">
                            @foreach ($prod as $row)
                            <div class="single-popular-feed">
                                <div class="feed-img">
                                    <img src="/images/{{$row->image}}" alt="Image">
                                </div>
                                <div class="feed-desc desc">
                                    <h6><a href="shop-detail.html">{{$row->name}}</a></h6>
                                    <span class="price">${{$row->sale_price}} <span>${{$row->price}}</span></span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Cart Widget -->
                    <div class="widget popular-feeds mb-40">
                        <h5 class="widget-title">Cart</h5>
                        <div class="popular-feed-loop">
                            @foreach($cart->items as $item)
                            <div class="single-popular-feed">
                                <div class="feed-img">
                                    <img src="/images/{{$item->image}}" alt="Image">
                                </div>
                                <div class="feed-desc desc">
                                    <div class="cart-flex">
                                        <h6><a href="#">{{$item->name}}</a></h6>
                                        <a href="{{route('delete.cart',$item->id)}}"
                                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')"
                                            class="remove"><i class="fal fa-times"></i></a>
                                    </div>
                                    <span class="price">${{$item->sale_price}} <span>${{$item->price}}</span></span>
                                </div>
                            </div>
                            @endforeach
                            <div class="widget-cart-info">
                                <div class="cart-details">
                                    <span>Subtotal:</span>
                                    <span>${{$cart->totalprice}}</span>
                                </div>
                                <div class="cart-buttons">
                                    <a href="{{route('view.cart')}}" class="main-btn btn-filled">View Cart</a>
                                    <a href="{{route('order.checkout')}}" class="main-btn btn-filled">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Instagram Feeds Widget -->
                    <div class="widget instagram-feed-widget mb-40">
                        <h5 class="widget-title">Instagram Feeds</h5>
                        <ul>
                            <li><img src="assets/img/instagram-wid/01.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/02.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/03.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/04.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/05.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/06.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/07.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/08.jpg" alt="Image"></li>
                            <li><img src="assets/img/instagram-wid/09.jpg" alt="Image"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-10">
                <div class="shop-products-wrapper">
                    <div class="shop-product-top">
                        <p>Showing 1 To 9 Of 60 results</p>
                        <div class="sorting-box">
                            <select name="guests" id="guests">
                                <option value="" disabled selected>Default Sorting</option>
                                <option value="1">Sort By Popularity</option>
                                <option value="2">Sort By Latest</option>
                                <option value="4">Sort By Rating</option>
                                <option value="8">Sort By Price:Low to High</option>
                                <option value="8">Sort By Price:High to Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-wrapper restaurant-tab-area">
                        <div class="row">
                            @foreach($pro as $row)
                            <div class="col-lg-4 col-md-6">
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
                                            <a href="shop-detail.html">{{$row->name}}</a>
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
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
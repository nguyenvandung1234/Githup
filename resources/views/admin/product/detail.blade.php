@extends('layouts.shop')

@section('main')

<main class="main">
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
                                    <a href="demo9-shop.html" class="sf-with-ul"><i
                                            class="sicon-briefcase"></i>Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    <li><a href="category.html">Fullwidth Banner</a></li>
                                                    <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category-banner-boxed-image.html">Boxed Image
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category.html">Left Sidebar</a></li>
                                                    <li><a href="category-sidebar-right.html">Right Sidebar</a>
                                                    </li>
                                                    <li><a href="category-off-canvas.html">Off Canvas Filter</a>
                                                    </li>
                                                    <li><a href="category-horizontal-filter1.html">Horizontal
                                                            Filter1</a>
                                                    </li>
                                                    <li><a href="category-horizontal-filter2.html">Horizontal
                                                            Filter2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 2</a>
                                                <ul class="submenu">
                                                    <li><a href="category-list.html">List Types</a></li>
                                                    <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                            Scroll</a>
                                                    </li>
                                                    <li><a href="category.html">3 Columns Products</a></li>
                                                    <li><a href="category-4col.html">4 Columns Products</a></li>
                                                    <li><a href="category-5col.html">5 Columns Products</a></li>
                                                    <li><a href="category-6col.html">6 Columns Products</a></li>
                                                    <li><a href="category-7col.html">7 Columns Products</a></li>
                                                    <li><a href="category-8col.html">8 Columns Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner">
                                                    <figure>
                                                        <img src="assets/images/menu-banner.jpg" alt="Menu banner">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                            <i>OFF</i>
                                                        </h4>
                                                        <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="demo9-product.html" class="sf-with-ul"><i
                                            class="sicon-present"></i>Products</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                                <ul class="submenu">
                                                    <li><a href="demo9-product.html">SIMPLE PRODUCT</a></li>
                                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a>
                                                    </li>
                                                    <li><a href="demo9-product.html">SALE PRODUCT</a></li>
                                                    <li><a href="demo9-product.html">FEATURED & ON SALE</a></li>
                                                    <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a>
                                                    </li>
                                                    <li><a href="product-sidebar-left.html">WITH LEFT
                                                            SIDEBAR</a>
                                                    </li>
                                                    <li><a href="product-sidebar-right.html">WITH RIGHT
                                                            SIDEBAR</a>
                                                    </li>
                                                    <li><a href="product-addcart-sticky.html">ADD CART
                                                            STICKY</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End .col-lg-4 -->

                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                                <ul class="submenu">
                                                    <li><a href="product-extended-layout.html">EXTENDED
                                                            LAYOUT</a>
                                                    </li>
                                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a>
                                                    </li>
                                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                    <li><a href="product-sticky-both.html">LEFT & RIGHT
                                                            STICKY</a>
                                                    </li>
                                                    <li><a href="product-transparent-image.html">TRANSPARENT
                                                            IMAGE</a></li>
                                                    <li><a href="product-center-vertical.html">CENTER
                                                            VERTICAL</a>
                                                    </li>
                                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-lg-4 -->

                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner menu-banner-2">
                                                    <figure>
                                                        <img src="assets/images/menu-banner-1.jpg" alt="Menu banner"
                                                            class="product-promo">
                                                    </figure>
                                                    <i>OFF</i>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                        </h4>
                                                    </div>
                                                    <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                            <!-- End .col-lg-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul"><i class="sicon-docs"></i>Pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="demo9-about.html">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="demo9-contact.html">Contact Us</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html"><i class="sicon-book-open"></i>blog</a></li>
                                <li><a href="demo9-about.html"><i class="sicon-users"></i>About Us</a></li>
                                <li class="item-menu-sale"><a href="#" class="border-top-0">HUGE SALE – 70%
                                        OFF</a>
                                </li>
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
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                <span>has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <!---->
                            <div class="product-label label-sale">
                                -16%
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <img class="product-single-image" src="/images/{{$product->image}}" style="height:400px">
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="/images/{{$product->image}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="/images/{{$product->image}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="/images/{{$product->image}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="/images/{{$product->image}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details mb-1">
                    <h1 class="product-title">{{$product->name}}</h1>

                    <div class="product-nav">
                        <div class="product-prev">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="../assets/images/products/product-3.jpg" style="padding-top: 0px;">

                                        <span>Circled Ultimate 3D Speaker</span>
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="product-next">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="../assets/images/products/product-4.jpg" style="padding-top: 0px;">

                                        <span>Blue Backpack for the Young</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="old-price">${{number_format($product->price)}}</span>
                        <span class="new-price">${{number_format($product->sale_price)}}</span>
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>{{$product->content}}</p>
                    </div>
                    <!-- End .product-desc -->

                    <ul class="single-info-list">
                        <!---->
                        <li>
                            SKU:
                            <strong>654613612</strong>
                        </li>

                        <li>
                            CATEGORY:
                            <strong>
                                <a href="#" class="product-category">SHOES</a>
                            </strong>
                        </li>

                        <li>
                            TAGs:
                            <strong><a href="#" class="product-category">CLOTHES</a></strong>,
                            <strong><a href="#" class="product-category">SWEATER</a></strong>
                        </li>
                    </ul>

                    <div class="product-filters-container">
                        <div class="product-single-filter"><label>Color:</label>
                            <ul class="config-size-list config-color-list config-filter-list">
                                <li class="">
                                    <a href="javascript:;" class="filter-color border-0"
                                        style="background-color: rgb(1, 136, 204);"></a>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="filter-color border-0 initial disabled"
                                        style="background-color: rgb(221, 181, 119);"></a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-single-filter">
                            <label>Size:</label>
                            <ul class="config-size-list">
                                <li>
                                    <a href="javascript:;"
                                        class="d-flex align-items-center justify-content-center">L</a>
                                </li>
                                <li class="">
                                    <a href="javascript:;"
                                        class="d-flex align-items-center justify-content-center">M</a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-single-filter">
                            <label></label>
                            <a class="font1 text-uppercase clear-btn" href="#">Clear</a>
                        </div>
                        <!---->
                    </div>

                    <div class="product-action">
                        <div class="price-box product-filtered-price">
                            <del class="old-price"><span>$286.00</span></del>
                            <span class="product-price">$245.00</span>
                        </div>

                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <!-- End .product-single-qty -->

                        <div class="detail-list">
                            <button class="btn-detail">Buy now</button>
                            <a href="{{route('add.cart',$product->id)}}" class="btn-detail_cart">
                                <i class="btn_cart-icon fa-solid fa-cart-shopping"></i>Add to cart
                            </a>
                        </div>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-1 pb-2 mt-0 pt-2">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                class="icon-wishlist-2"></i><span>Add to
                                Wishlist</span></a>
                    </div>
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                        role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab"
                        aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab"
                        aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content"
                        role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                    aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do,
                            quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                    <div class="product-size-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../assets/images/products/single/body-shape.png" alt="body shape" width="217"
                                    height="398">
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-md-8">
                                <table class="table table-size">
                                    <thead>
                                        <tr>
                                            <th>SIZE</th>
                                            <th>CHEST (in.)</th>
                                            <th>WAIST (in.)</th>
                                            <th>HIPS (in.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>XS</td>
                                            <td>34-36</td>
                                            <td>27-29</td>
                                            <td>34.5-36.5</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>36-38</td>
                                            <td>29-31</td>
                                            <td>36.5-38.5</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>38-40</td>
                                            <td>31-33</td>
                                            <td>38.5-40.5</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>40-42</td>
                                            <td>33-36</td>
                                            <td>40.5-43.5</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>42-45</td>
                                            <td>36-40</td>
                                            <td>43.5-47.5</td>
                                        </tr>
                                        <tr>
                                            <td>XLL</td>
                                            <td>45-48</td>
                                            <td>40-44</td>
                                            <td>47.5-51.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-size-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <table class="table table-striped mt-2">
                        <tbody>
                            <tr>
                                <th>Weight</th>
                                <td>23 kg</td>
                            </tr>

                            <tr>
                                <th>Dimensions</th>
                                <td>12 × 24 × 35 cm</td>
                            </tr>

                            <tr>
                                <th>Color</th>
                                <td>Black, Green, Indigo</td>
                            </tr>

                            <tr>
                                <th>Size</th>
                                <td>Large, Medium, Small</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                    aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                        <div class="comment-list">
                            <div class="comments">
                                <figure class="img-thumbnail">
                                    <img src="../assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                </figure>

                                <div class="comment-block">
                                    <div class="comment-header">
                                        <div class="comment-arrow"></div>

                                        <div class="ratings-container float-sm-right">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>

                                        <span class="comment-by">
                                            <strong>Joe Doe</strong> – April 12, 2018
                                        </span>
                                    </div>

                                    <div class="comment-content">
                                        <p>Excellent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="#" class="comment-form m-0">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>

                                    <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->


                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class=" custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<hr>

<!-- @if (auth('customer')->check())
<form action="{{ route('home.product_comment', $product->id) }}" method="POST" role="form">
    <input type="hidden" name="product_id" value="{{$product->id}}">
    <legend>Bình luận sản phẩm</legend>
    @csrf
    @if (Session::has('ok'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{ Session::get('ok') }}!</strong>
    </div>
    @endif
    <div class="form-group">
        <label for="">Nội dung bình luận</label>
        <textarea name="content" class="form-control" placeholder="Nội dung bình luận"></textarea>
        @error('content') {{ $message }} @enderror
    </div>
    <button type="submit" class="btn btn-primary">Gửi bình luận</button>
</form>
@else

<div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Chưa đăng nhập</strong> bạn hãy <a href="{{ route('home.login') }}">click vào đây</a> để đăng nhập
</div>
    

@endif
<hr>
<div class="comments">
    @foreach($product->comments as $comment)
    <div class="media">
        <a class="pull-left" href="#">
            <img width="60" class="media-object" src="https://haycafe.vn/wp-content/uploads/2022/03/Avatar-TikTok-anh-dai-dien-TikTok.jpg" alt="Image">
        </a>
        <div class="media-body">
            <h4 class="media-heading">{{$comment->user->name}}</h4>

            <p>{{$comment->content}}</p>
        @if (auth('customer')->check() && auth('customer')->user()->can('change-comment', $comment))
            <a href="{{ route('home.deleteComment', $comment->id) }}" class="label label-danger">Xóa</a> 
            <a href="" class="label label-default">Sửa</a> 
        @endif
            
        </div>
    </div>
    @endforeach
</div>
<hr> -->






@stop
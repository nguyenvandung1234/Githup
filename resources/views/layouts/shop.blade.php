<!DOCTYPE html>
<html lang="en">

<base href="/">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 13:55:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/icons/favicon.png">

    <script>
    WebFontConfig = {
        google: {
            families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
        }
    };
    (function(d) {
        var wf = d.createElement('script'),
            s = d.scripts[0];
        wf.src = '../assets/js/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/demo9.min.css">
    <link rel="stylesheet" href="../assets/css/shop.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css">
</head>

<body class="boxed">
    <div class="page-wrapper">
        <header class="header mb-0" data-y="0">
            <div class="container">
                <div class="pre-header w-100">
                    <div class="owl-carousel owl-theme feature-box-carousel" data-toggle="owl" data-owl-options="{
                        'margin': 1,
                        'autoplay': false,
                        'autoplayTimeout': 3000,
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'responsive' : {
                            '0' : {
                                'items' : 1
                            },
                            '576' : {
                                'items' : 2
                            },
                            '768' : {
                                'items' : 3
                            },
                            '992' : {
                                'items' : 4
                            }
                        }
                    }">
                        <div class="info-box info-box-icon-left">
                            <i class="icon-shipping line-height-1"></i>

                            <div class="info-box-content">
                                <h4 class="ls-n-25 line-height-1">FREE SHIPPING &amp; RETURN</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <div class="info-box info-box-icon-left">
                            <i class="icon-money line-height-1"></i>

                            <div class="info-box-content">
                                <h4 class="ls-n-25 line-height-1">MONEY BACK GUARANTEE</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <div class="info-box info-box-icon-left">
                            <i class="icon-support line-height-1"></i>

                            <div class="info-box-content">
                                <h4 class="ls-n-25 line-height-1">ONLINE SUPPORT 24/7</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <div class="info-box info-box-icon-left">
                            <i class="icon-secure-payment line-height-1"></i>

                            <div class="info-box-content">
                                <h4 class="ls-n-25 line-height-1">SECURE PAYMENT</h4>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <div class="header-dropdown">
                            <a href="#" class="pl-0">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-links mega-menu show-arrow d-none d-lg-inline-block mt-0 mb-0">
                                <li class="item-menu btn-primary btn-sm">
                                        <a href="{{route('view.cart')}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge badge-pill badge-danger">{{count((array)session('cart1'))}}</span>
                                        </a>
                                </li>
                                
                        </ul>
                        <div class="header-dropdown">
                                    <a href="#" style="padding:6px 10px" class="item-menu btn-primary btn-sm">Logout</a>
                                    <div class="">
                                        <ul>
                                            @if(auth('cus')->check())
                                                <li class="btn-primary btn-sm"><a class="logout" href="{{route('account.profile')}}">Xin chào {{auth('cus')->user()->name}}</a></li>
                                                <li class="btn-primary btn-sm"><a class="logout" href="{{route('account.change_password')}}">Change password</a></li>
                                                <li class="btn-primary btn-sm"><a class="logout" href="{{route('account.logout')}}">Logout</a></li>
                                            @else
                                                <li class="btn-primary btn-sm"><a class="login" href="{{route('account.login')}}">Login</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                        <span class="separator d-none d-lg-block"></span>
                        <div class="social-icons d-flex align-items-center">
                            <a target="_blank" rel="nofollow" class="social-icon social-facebook icon-facebook" href="#"
                                title="Facebook"></a>
                            <a target="_blank" rel="nofollow" class="social-icon social-twitter icon-twitter" href="#"
                                title="Twitter"></a>
                            <a target="_blank" rel="nofollow" class="social-icon social-instagram icon-instagram"
                                href="#" title="Instagram"></a>
                        </div>
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="container">
                <div class="header-middle sticky-header d-flex w-100">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler text-white mr-2" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <a href="demo9.html" class="logo">
                                <img src="../assets/images/logo-white.png" alt="Porto Logo" width="110" height="46" />
                            </a>
                        </div>
                        <!-- End .header-left -->

                        <div
                            class="header-center flex-1 ml-lg-0 justify-content-end justify-content-lg-start  w-lg-max">
                            <div
                                class="header-icon header-search header-search-inline header-search-category w-lg-max d-none d-sm-block">
                                <a href="#" class="search-toggle text-white" role="button"><i
                                        class="icon-search-3 pt-md-1 pr-2 mr-3 d-none d-sm-inline-block"></i></a>
                                <form action="">
                                    <div class="header-search-wrapper">
                                        <input type="search" class="form-control" name="key" placeholder="Search..."
                                            required="">
                                        <div class="select-custom">
                                            <select id="cat" name="cat">
                                                <option value="">All Categories</option>
                                                <option value="4">Fashion</option>
                                                <option value="12">- Women</option>
                                                <option value="13">- Men</option>
                                                <option value="66">- Jewellery</option>
                                                <option value="67">- Kids Fashion</option>
                                                <option value="5">Electronics</option>
                                                <option value="21">- Smart TVs</option>
                                                <option value="22">- Cameras</option>
                                            </select>
                                        </div>
                                        <!-- End .select-custom -->
                                        <button class="btn icon-magnifier" type="submit"></button>
                                    </div>
                                    <!-- End .header-search-wrapper -->
                                </form>
                            </div>
                            <!-- End .header-search -->
                        </div>
                        <div class="header-right ml-0 ml-lg-auto">
                            <div class="header-contact d-none d-lg-flex align-items-center">
                                <i class="icon-phone-2"></i>
                                <h6>Call us now<a href="tel:#" class="font1">+123 5678 890</a></h6>
                            </div>

                            <a href="login.html" class="header-icon header-icon-user text-white"><i
                                    class="icon-user-2 d-inline-flex-center"></i></a>

                            <a href="wishlist.html" class="header-icon d-inline-flex text-white"><i
                                    class="icon-wishlist-2 d-inline-flex-center line-height-1"></i></a>

                            <div class="dropdown cart-dropdown">
                                <a href="#" title="Cart"
                                    class="dropdown-toggle dropdown-arrow cart-toggle d-flex align-items-center"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-display="static">
                                    <i class="minicart-icon"></i>
                                    <span class="cart-count badge-circle">3</span>
                                </a>

                                <div class="cart-overlay"></div>

                                <div class="dropdown-menu mobile-cart">
                                    <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                    <div class="dropdownmenu-wrapper custom-scrollbar">
                                        <div class="dropdown-cart-header">Shopping Cart</div>
                                        <!-- End .dropdown-cart-header -->

                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="demo9-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span> × $99.00
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->

                                                <figure class="product-image-container">
                                                    <a href="demo9-product.html" class="product-image">
                                                        <img src="../assets/images/products/product-1.jpg" alt="product"
                                                            width="80" height="80">
                                                    </a>

                                                    <a href="#" class="btn-remove"
                                                        title="Remove Product"><span>×</span></a>
                                                </figure>
                                            </div>
                                            <!-- End .product -->

                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="demo9-product.html">Brown Women Casual HandBag</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span> × $35.00
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->

                                                <figure class="product-image-container">
                                                    <a href="demo9-product.html" class="product-image">
                                                        <img src="../assets/images/products/product-2.jpg" alt="product"
                                                            width="80" height="80">
                                                    </a>

                                                    <a href="#" class="btn-remove"
                                                        title="Remove Product"><span>×</span></a>
                                                </figure>
                                            </div>
                                            <!-- End .product -->

                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="demo9-product.html">Circled Ultimate 3D Speaker</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span> × $35.00
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->

                                                <figure class="product-image-container">
                                                    <a href="demo9-product.html" class="product-image">
                                                        <img src="../assets/images/products/product-3.jpg" alt="product"
                                                            width="80" height="80">
                                                    </a>
                                                    <a href="#" class="btn-remove"
                                                        title="Remove Product"><span>×</span></a>
                                                </figure>
                                            </div>
                                            <!-- End .product -->
                                        </div>
                                        <!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>SUBTOTAL:</span>

                                            <span class="cart-total-price float-right">$134.00</span>
                                        </div>
                                        <!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                                Cart</a>
                                            <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                        </div>
                                        <!-- End .dropdown-cart-total -->
                                    </div>
                                    <!-- End .dropdownmenu-wrapper -->
                                </div>
                                <!-- End .dropdown-menu -->
                            </div>
                            <!-- End .dropdown -->
                        </div>
                        <!-- End .header-right -->
                    </div>
                </div>
            </div>
            <!-- End .container -->

        </header>
        <!-- End .header -->

        <main class="main">
            <div class="container">

                @yield('main')


                <!-- End .row.home-products -->

                <div class="mb-3"></div>
                <!-- margin -->

                <div class="m-b-1"></div>
                <!-- margin -->

                <div class="brands-section appear-animate p-y-5">
                    <div class="container">
                        <div class="brands-slider images-center owl-carousel owl-theme nav-pos-outside show-nav-hover appear-animate"
                            data-owl-options="{
                                'margin': 0,
                                'loop': true,
                                'autoplay': true
                            }">
                            <img src="../assets/images/brands/small/brand1.png" width="140" height="60" alt="logo" />
                            <img src="../assets/images/brands/small/brand2.png" width="140" height="60" alt="logo" />
                            <img src="../assets/images/brands/small/brand3.png" width="140" height="60" alt="logo" />
                            <img src="../assets/images/brands/small/brand4.png" width="140" height="60" alt="logo" />
                            <img src="../assets/images/brands/small/brand5.png" width="140" height="60" alt="logo" />
                            <img src="../assets/images/brands/small/brand6.png" width="140" height="60" alt="logo" />
                        </div>
                        <!-- End .partners-carousel -->
                    </div>
                    <!-- End .container -->
                </div>
            </div>
            <!-- End .container -->
             @yield('scripts')
        </main>
        <!-- End .main -->

        <div class="container">
            <footer class="footer bg-dark">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget">
                                    <h4 class="widget-title">Contact Info</h4>
                                    <ul class="contact-info">
                                        <li>
                                            <span class="contact-info-label">Address:</span>1234 Street Name, City,
                                            England
                                        </li>
                                        <li>
                                            <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123)
                                                456-7890</a>
                                        </li>
                                        <li>
                                            <span class="contact-info-label">Email:</span> <a
                                                href="https://portotheme.com/cdn-cgi/l/email-protection#86ebe7efeac6e3fee7ebf6eae3a8e5e9eb"><span
                                                    class="__cf_email__"
                                                    data-cfemail="670a060e0b27021f060a170b024904080a">[email&#160;protected]</span></a>
                                        </li>
                                        <li>
                                            <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00
                                            AM - 8:00 PM
                                        </li>
                                    </ul>
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                            title="Facebook"></a>
                                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                            title="Twitter"></a>
                                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"
                                            title="Instagram"></a>
                                    </div>
                                    <!-- End .social-icons -->
                                </div>
                                <!-- End .widget -->
                            </div>
                            <!-- End .col-lg-3 -->

                            <div class="col-lg-3 col-sm-6">
                                <div class="widget">
                                    <h4 class="widget-title">Customer Service</h4>

                                    <ul class="links">
                                        <li><a href="#">Help & FAQs</a></li>
                                        <li><a href="#">Order Tracking</a></li>
                                        <li><a href="#">Shipping & Delivery</a></li>
                                        <li><a href="#">Orders History</a></li>
                                        <li><a href="#">Advanced search</a></li>
                                        <li><a href="dashboard.html">My Account</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="demo9-about.html">About Us</a></li>
                                        <li><a href="demo9-contact.html">Contact Us</a></li>
                                        <li><a href="#">Corporate Sales</a></li>
                                    </ul>
                                </div>
                                <!-- End .widget -->
                            </div>
                            <!-- End .col-lg-3 -->

                            <div class="col-lg-3 col-sm-6">
                                <div class="widget">
                                    <h4 class="widget-title">MAIN FEATURES</h4>

                                    <ul class="links">
                                        <li><a href="#">Super Fast HTML Template</a></li>
                                        <li><a href="#">Top Rated HTML Template</a></li>
                                        <li><a href="#">33 Unique Shop Layouts</a></li>
                                        <li><a href="#">Powerful Wordpress Features</a></li>
                                        <li><a href="#">Mobile & Retina Optimized</a></li>
                                        <li><a href="#">Super Fast HTML Template</a></li>
                                        <li><a href="#">Top Rated HTML Template</a></li>
                                        <li><a href="#">33 Unique Shop Layouts</a></li>
                                        <li><a href="#">Powerful Wordpress Features</a></li>
                                        <li><a href="#">Mobile & Retina Optimized</a></li>
                                    </ul>
                                </div>
                                <!-- End .widget -->
                            </div>
                            <!-- End .col-lg-3 -->

                            <div class="col-lg-3 col-sm-6">
                                <div class="widget">
                                    <h4 class="widget-title">Popular Tags</h4>

                                    <div class="tagcloud">
                                        <a href="#">Clothes</a>
                                        <a href="#">Fashion</a>
                                        <a href="#">Hub</a>
                                        <a href="#">Shirt</a>
                                        <a href="#">Skirt</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Sweater</a>
                                    </div>
                                </div>
                                <!-- End .widget -->
                            </div>
                            <!-- End .col-lg-3 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .container -->
                </div>
                <!-- End .footer-middle -->

                <div class="container px-6">
                    <div class="footer-bottom d-sm-flex align-items-center">
                        <div class="footer-left">
                            <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                        </div>

                        <div class="footer-right ml-auto mt-1 mt-sm-0">
                            <div class="payment-icons mr-0">
                                <span class="payment-icon visa"
                                    style="background-image: url(../assets/images/payments/payment-visa.svg)"></span>
                                <span class="payment-icon paypal"
                                    style="background-image: url(../assets/images/payments/payment-paypal.svg)"></span>
                                <span class="payment-icon stripe"
                                    style="background-image: url(../assets/images/payments/payment-stripe.png)"></span>
                                <span class="payment-icon verisign"
                                    style="background-image:  url(../assets/images/payments/payment-verisign.svg)"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .container -->
            </footer>
            <!-- End .footer -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="demo9.html"><i class="icon-home"></i>Home</a></li>
                    <li>
                        <a href="demo9-shop.html" class="sf-with-ul"><i class="sicon-briefcase"></i>Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left
                                    Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo9-product.html" class="sf-with-ul"><i class="sicon-present"></i>Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul"><i class="sicon-docs"></i>Pages</a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                    <li><a href="demo9-about.html"><i class="sicon-users"></i>About Us</a></li>
                    <li><a href="demo9-about.html"><i class="sicon-users"></i>HUGE SALE – 70% OFF</a></li>
                </ul>

                <ul class="mobile-menu menu-with-icon mt-2 mb-2">
                    <li class="border-0">
                        <a href="#" target="_blank">Woman Shoes</a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">50% OFF FASHION</a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">Buy Porto!</a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="dashboard.html">My Account</a></li>
                    <li><a href="demo9-about.html">About Us</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo9.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo9-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>


    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    @if(Session::has('success'))
    <script>
        $.toast({
            heading: 'Thông báo',
            text: "{{Session::get('success')}}",
            showHideTransition: 'slide',
            position: 'top-center',
            icon: 'success',
            hideAfter: 10000
        })
    </script>
    @endif

    @if(Session::has('no'))
    <script>
        $.toast({
            heading: 'Thông báo',
            text: "{{Session::get('no')}}",
            showHideTransition: 'slide',
            position: 'top-center',
            icon: 'error',
            hideAfter: 10000
        })
    </script>
    @endif
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 13:56:12 GMT -->

</html>
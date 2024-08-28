@extends('layouts.shop')


@section('main')

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </div>
</nav>
<section class="featured-products-section">
<h2 class="section-title title-decorate text-center d-flex align-items-center appear-animate"
data-animation-delay="100" data-animation-duration="1500">{{$Category->name}}</h2>

    <hr>
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
                        <img class="post-img" src="/images/{{$row->image}}" alt="product" style="height:200px">
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
                    <h3 class="product-title"> <a href="demo9-product.html">Product Black Bag</a> </h3>
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
                        <span class="product-price">$99.00 – $109.00</span>
                    </div>
                    <!-- End .price-box -->
                    <div class="product-action">
                        <a href="#" class="btn-icon btn-add-cart"><i
                                class=""></i><span>ADD TO CART</span></a>
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
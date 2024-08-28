@extends('layouts.main')

@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Category</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li class="active">Category</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== RESTAURANT PART START ======-->
<section class="restaurant-tab-area pt-120">
    <div class="container">
        <ul class="restaurant-rood-list row justify-content-center nav nav-pills mb-30" id="restaurant-tab"
            role="tablist">
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" data-toggle="pill" href="#chicken">
                    <i class="flaticon-ring"></i>
                    <span class="title">Rings</span>
                </a>
            </li>
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link active" data-toggle="pill" href="#italian">
                    <i class="flaticon-earrings"></i>
                    <span class="title">Earrings</span>
                </a>
            </li>
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" data-toggle="pill" href="#coffee">
                    <i class="flaticon-necklace"></i>
                    <span class="title">Necklaces</span>
                </a>
            </li>
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" data-toggle="pill" href="#bake-cake">
                    <i class="flaticon-bracelet-2"></i>
                    <span class="title">Bracelets</span>
                </a>
            </li>
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" data-toggle="pill" href="#cokkies">
                    <i class="flaticon-bracelet"></i>
                    <span class="title">Armlets</span>
                </a>
            </li>
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                <a class="nav-link" data-toggle="pill" href="#coctail">
                    <i class="flaticon-bracelet-1"></i>
                    <span class="title">Anklets</span>
                </a>
            </li>
        </ul>
        <!-- tab content -->
        <div class="tab-content " id="restaurant-tabContent">
            <div class="tab-pane fade show active" id="chicken" role="tabpanel">
                <div class="row">
                    @foreach($pro as $row)
                    <div class="col-lg-3 col-md-6">
                        <div class="food-box shop-box">
                            <div class="thumb">
                                <img src="/images/{{$row->image}}" height="300px" alt="images">
                                <div class="badges">
                                    <span class="price discounted">-10%</span>
                                </div>
                                <div class="button-group">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="far fa-sync-alt"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"><i
                                            class="far fa-eye"></i></a>
                            <a href="{{route('add.cart',$row->id)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            <div class="desc">
                                <h4>
                                    <a href="shop-detail.html">{{$row->name}}</a>
                                </h4>
                                <span class="price">${{$row->sale_price}} <span>${{$row->price}}</span></span>
                                <a href="/detail/{{Str::slug($row->name)}}_{{$row->id}}" class="link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@stop
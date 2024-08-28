@extends('layouts.main')

@section('main')

<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Shop Detail</h2>
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
            <div class="col-lg-5">
                <div class="shop-detail-image">
                    <div class="detail-slider-1">
                        <div class="slide-item">
                            <div class="image-box">
                                    <img src="/images/{{$product->image}}" class="img-fluid" alt="img">
                                <span class="price">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-slider-2">
                        <div class="slide-item">
                            <div class="image-box">
                                <img src="/images/{{$product->image}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image-box">
                                <img src="/images/{{$product->image}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image-box">
                                <img src="/images/{{$product->image}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image-box">
                                <img src="/images/{{$product->image}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="shop-detail-content">
                    <h3 class="product-title mb-20">{{$product->name}}</h3>
                    <span class="rating mb-20">
                        <span class="text-yellow"><i class="far fa-star"></i></span>
                        <span class="text-yellow"><i class="far fa-star"></i></span>
                        <span class="text-yellow"><i class="far fa-star"></i></span>
                        <span class="text-dark-white"><i class="far fa-star"></i></span>
                        <span class="text-dark-white"><i class="far fa-star"></i></span>
                        <span class="pro-review"> <span>1 Reviews</span>
                        </span>
                    </span>
                    <div class="desc mb-20 pb-20 border-bottom">
                        <span class="price">${{$product->sale_price}} <span>${{$product->price}}</span></span>
                    </div>
                    <div class="mt-20 mb-20">
                        <div class="d-inline-block other-info">
                            <h6>Availability:
                                <span class="text-success ml-2">In Stock</span>
                            </h6>
                        </div>
                        <div class="ml-2 d-inline-block other-info">
                            <h6>SKU:
                                <span class="grey ml-2">006-bhg</span>
                            </h6>
                        </div>
                    </div>
                    <div class="short-descr mb-20">
                        <p>{{$product->content}}</p>
                    </div>
                    <div class="color-sec mb-20">
                        <label>Color</label>
                        <div class="color-box">
                            <label class="m-0">
                                <input type="radio" name="color">
                                <span class="choose-color red"></span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="color">
                                <span class="choose-color yellow"></span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="color">
                                <span class="choose-color blue"></span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="color">
                                <span class="choose-color green"></span>
                            </label>
                        </div>
                    </div>
                    <div class="color-sec mb-20">
                        <label>Material</label>
                        <div class="color-box">
                            <label class="m-0">
                                <input type="radio" name="material">
                                <span class="choose-material">Gold</span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="material">
                                <span class="choose-material">Diamond</span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="material">
                                <span class="choose-material">Silver</span>
                            </label>
                            <label class="m-0">
                                <input type="radio" name="material">
                                <span class="choose-material">Stone</span>
                            </label>
                        </div>
                    </div>
                    <div class="quantity-cart d-block d-sm-flex">
                        <div class="quantity-box">
                            <button type="button" class="minus-btn">
                                <i class="fal fa-minus"></i>
                            </button>
                            <input type="text" class="input-qty" name="name" value="1">
                            <button type="button" class="plus-btn">
                                <i class="fal fa-plus"></i>
                            </button>
                        </div>
                        <div class="cart-btn pl-40">
                            <a href="{{route('add.cart',$product->id)}}" class="main-btn btn-border">Add to Cart</a>
                        </div>
                    </div>
                    <div class="other-info flex mt-20">
                        <h6>Category:</h6>
                        <ul>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="grey">Bracelets</a>
                            </li>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="grey">Rings</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="grey">Silver Bracelet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="other-info flex mt-20">
                        <h6>Tags:</h6>
                        <ul>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="grey">rings</a>
                            </li>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="grey">necklaces</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="grey">bracelet</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="product-description mt-100">
                    <div class="tabs">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                    href="#description">Description</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (3)</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info">Additional Info</a>
                            </li>
                        </ul>
                        <div class="tab-content pb-0">
                            <div class="tab-pane active" id="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit.
                                    Donec ac tempus ante. Fusce ultricies massa massa. Fusce
                                    aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo
                                    augue nisi non neque.Cras neque metus, consequat et blandit et, luctus a nunc. Etiam
                                    gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Nam erat mi, rutrum at sollicitudin rhoncusp</p>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="news-details-box">
                                    <div class="comment-template">
                                        <h3 class="box-title">03 Reviews</h3>
                                        <ul class="comments-list mb-100">
                                            <li>
                                                <div class="comment-img">
                                                    <img src="assets/img/blog-details/avatar-1.jpg" alt="img">
                                                </div>
                                                <div class="comment-desc">
                                                    <div class="desc-top">
                                                        <h6>Rosalina Kelian</h6>
                                                        <span class="date">19th May 2024</span>
                                                        <a href="#" class="reply-link"><i
                                                                class="far fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo
                                                        consequat.
                                                    </p>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="comment-img">
                                                            <img src="assets/img/blog-details/avatar-2.jpg" alt="img">
                                                        </div>
                                                        <div class="comment-desc">
                                                            <div class="desc-top">
                                                                <h6>Rosalina Kelian</h6>
                                                                <span class="date">19th May 2024</span>
                                                                <a href="#" class="reply-link"><i
                                                                        class="far fa-reply"></i>Reply</a>
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit, sed do
                                                                eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                enim ad minim
                                                                veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea
                                                                commodo
                                                                consequat.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="comment-img">
                                                    <img src="assets/img/blog-details/avatar-3.jpg" alt="img">
                                                </div>
                                                <div class="comment-desc">
                                                    <div class="desc-top">
                                                        <h6>Rosalina Kelian</h6>
                                                        <span class="date">19th May 2024</span>
                                                        <a href="#" class="reply-link"><i
                                                                class="far fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo
                                                        consequat.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <h3 class="box-title">Post Comment</h3>
                                        <div class="comment-form">
                                            <form action="#">
                                                <div class="input-group input-group-two textarea mb-20">
                                                    <textarea placeholder="Type your Review...."></textarea>
                                                    <div class="icon"><i class="fas fa-pen"></i></div>
                                                </div>
                                                <div class="input-group input-group-two mb-20">
                                                    <input type="text" placeholder="Type your Name....">
                                                    <div class="icon"><i class="fas fa-user"></i></div>
                                                </div>
                                                <div class="input-group input-group-two mb-20">
                                                    <input type="email" placeholder="Type your email....">
                                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <div class="input-group  mt-30">
                                                    <button type="submit" class="main-btn btn-filled"><i
                                                            class="far fa-comments"></i> Post
                                                        Review</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade additional-info" id="info">
                                <h3 class="text-white mb-20">Additional Information</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Attributes</th>
                                            <th>Values</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Color</b></td>
                                            <td class="value">Red, White, Black</td>
                                        </tr>
                                        <tr>
                                            <td><b>Material</b></td>
                                            <td class="value">Steel, Wood, Stone</td>
                                        </tr>
                                        <tr>
                                            <td><b>Weight</b></td>
                                            <td class="value">400 Gram</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@if (auth('cus')->check())
<div class="col-md-6">
    <h3 class="box-title" style="padding:19px 0">Post Comment</h3>
    <div class="comment-form">
        <form action="{{route('home.comment',$product->id)}}" method="POST" role="form">
            @csrf
            <div class="input-group input-group-two textarea mb-20">
                <textarea name="comment" placeholder="Type your comments...."></textarea>
                <div class="icon"><i class="fas fa-pen"></i></div>
            </div>
            <div class="input-group  mt-30">
                <button type="submit" class="main-btn btn-filled"><i class="far fa-comments"></i> Post
                    Comment</button>
            </div>
        </form>
    </div>
</div>
@else


<div class="alert alert-danger">
    <strong>Not logged in yet</strong> <a href="{{route('account.login')}}">Login</a>
</div>

@endif


<hr style="border-color:white">


@foreach ($comment as $comm)

<div class="media" style="padding-left:10px;margin:50px">
    <div>
        <a style="font-size:36px; margin:0 20px;padding:5px 18px;border:1px solid white;border-radius:500px"
            class="pull-left" href="#">
            <i class="fa-solid fa-user"></i>
        </a>
    </div>
    <div class="media-body">
        <h5 style="font-size:16px" class="media-heading">{{$comm->customer->name}}</h>
            <p style="padding:18px 0">{{$comm->created_at->format('d/m/y')}}</p>
            <p style="padding:26px 0;font-size:20px" class="media-comment">{{$comm->comment}}</p>
            <p>
                <a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-pencil"></i></a>
                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
            </p>
    </div>
</div>

@endforeach


@stop
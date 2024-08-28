@extends('layouts.main')
@section('main')



<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Checkout</h2>
            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== SHOP SECTION START ======-->
<section class="checkout pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                @if(count($cart->items) > 0)
                <form action="" method="POST">
                    @csrf
                    <div class="checkout-form">
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-xl-12 input-group input-group-two mb-20">
                                <label>Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" placeholder="First name" name="name">
                            </div>
                            <div class="col-12 input-group input-group-two mb-20">
                                <label>Email
                                </label>
                                <input type="text" placeholder="email" name="email">
                            </div>
                            <div class="col-12 input-group input-group-two mb-20">
                                <label>Address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" placeholder="Your Address" name="address" required="">
                            </div>
                            <div class="col-xl-12 input-group input-group-two mb-20">
                                <label>Phone
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" placeholder="Phone Number" name="phone" required="">
                            </div>
                            <div class="col-xl-12 input-group input-group-two mb-20">
                                <p class="small mb-20">
                                    Your personal data will be used to process your order, support your experience
                                    throughout
                                    this
                                    website, and for other purposes described in our
                                    <a href="#">Privacy Policy</a>
                                </p>
                                <button type="submit" class="main-btn btn-filled w-100">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
            <div class="col-xl-8 space-top">
                <div class="checkout-table">
                    @if(count($cart->items))
                    <table class="table cw-cart-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="product-name">Product</th>
                                <th scope="col" class="product-qty">Name</th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-price">Quantity</th>
                                <th scope="col" class="product-price">TotalPrice</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $item)
                            <form action="{{route('update.cart', $item->id)}}">
                                <tr>
                                    <td data-title="Product" class="has-title">
                                        <div class="product-thumbnail">
                                            <img src="/images/{{$item->image}}" alt="product_thumbnail">
                                        </div>
                                    </td>
                                    <td class="product-price text-white cw-align has-title" data-title="Price">
                                        <span class="product-amount"><b>{{$item->name}}</b></span>
                                    </td>
                                    <td class="product-price text-white cw-align has-title" data-title="Price">
                                        <span class="product-amount"><b>{{$item->price}}</b></span>
                                    </td>
                                    <td class="quantity shop-detail-content cw-qty-sec cw-align has-title"
                                        data-title="Quantity">
                                        <div class="quantity-box">
                                            <button type="submit" class="minus-btn">
                                                <i class="fal fa-minus"></i>
                                            </button>
                                            <input type="number" class="input-qty" name="soluong"
                                                value="{{$item->soluong}}">
                                            <button type="submit">
                                                <i class="fal fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="product-price text-white cw-align has-title" data-title="Price">
                                        <span class="product-currency"><b>$</b></span> <span
                                            class="product-amount"><b>{{$item->soluong * $item->price}}</b></span>
                                    </td>
                                    <td class="product-remove text-center cw-align">
                                        <a href="{{route('delete.cart', $item->id)}}"
                                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')"><i
                                                class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                @method('PUT')
                                @csrf
                            </form>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" style="padding:6px">
                                    <a href="{{route('home')}}" class="main-btn btn-filled float-left">Continue
                                        Shoping</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    @else
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong> Shopping cart is empty </strong> Shopping cart is empty, <a href="{{route('home')}}">
                            Please click
                            here </a> to continue shopping
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>


@stop
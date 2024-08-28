@extends('layouts.main')

@section('main')
<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Cart</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== SHOP SECTION START ======-->
<section class="cart-section pt-120 pb-120">

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="w-100 table-responsive mb-60">
                    @if(count($cart->items) > 0)
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
                                        <span class="product-amount"><b>{{$item->sale_price}}</b></span>
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
                                            class="product-amount"><b>{{$item->soluong * $item->sale_price}}</b></span>
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
                                    <a href="{{route('home')}}" class="main-btn btn-filled float-left">Continue Shoping</a>
                                    <a href="{{route('order.checkout')}}" class="main-btn btn-filled float-right">Buy
                                        Now</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="cw-product-promo">
                            <table class="table cw-table-borderless">
                                <tbody>
                                    <tr>
                                        <td> <b>TotalQuantity</b> </td>
                                        <td class="text-right">{{$cart->totalquantity}}</td>
                                    </tr>
                                    <tr>
                                        <td> <b>TotalPrice</b> </td>
                                        <td class="text-right">${{number_format($cart->totalprice)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{route('order.history')}}" class="main-btn btn-filled w-100">Proceed to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@stop
@extends('layouts.main')

@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Order details</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">details</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== SHOP SECTION START ======-->
<section class="cart-section pt-120 pb-120">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Thông tin đơn hàng</h4>
                <div class="w-100 table-responsive mb-60">
                    <table class="table cw-cart-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="product-name">id</th>
                                <td>#{{$order->id}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-qty">Purchase</th>
                                <td>{{date('d-m-Y',strtotime($order->created_at))}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-price">TotalPrice</th>
                                <td>{{number_format($order->TotalPrice())}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-price">status</th>
                                <td class="product-price text-white cw-align has-title" data-title="Price">
                                    @if($order->status == 0)
                                    <span class="btn btn-warning">Chờ duyệt</span>
                                    @elseif($order->status == 1)
                                    <span class="btn btn-primary">Đã duyệt</span>
                                    @elseif($order->status == 2)
                                    <span class="btn btn-success">Đã hoàn thành</span>
                                    @else
                                    <span class="btn btn-danger">Đã hủy</span>
                                    @endif
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Thông tin khách hàng</h4>
                <div class="w-100 table-responsive mb-60">
                    <table class="table cw-cart-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="product-name">Name</th>
                                <td>{{$order->name}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-qty">Email</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-price">Address</th>
                                <td>{{$order->address}}</td>
                            </tr>
                            <tr>
                                <th scope="col" class="product-price">Phone</th>
                                <td>{{$order->phone}}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <table class="table cw-cart-table mb-0">
            <h4>Chi tiết sản phẩm đơn hàng</h4>
            <thead>
                <tr>
                    <th scope="col" class="product-id">Id</th>
                    <th scope="col" class="product-image">Product</th>
                    <th scope="col" class="product-name">Product name</th>
                    <th scope="col" class="product-price">Price</th>
                    <th scope="col" class="product-price">Quantity</th>
                    <th scope="col" class="product-price">Into money</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->details as $row)
                <tr>
                <td class="product-price text-white cw-align has-title" data-title="Price">
                        <span class="product-amount"><b>{{$loop->index +1}}</b></span>
                    </td>
                    <td data-title="Product" class="has-title">
                        <div class="product-thumbnail">
                            <img src="/images/{{$row->product->image}}" alt="product_thumbnail">
                        </div>
                    </td>
                    <td class="product-price text-white cw-align has-title" data-title="Price">
                        <span class="product-amount"><b>{{$row->product->name}}</b></span>
                    </td>
                    <td class="product-price text-white cw-align has-title" data-title="Price">
                        <span class="product-amount"><b>${{number_format($row->price)}}</b></span>
                    </td>
                    <td class="product-price text-white cw-align has-title" data-title="Price">
                        <span class="product-amount"><b>{{$row->quantity}}</b></span>
                    </td>
                    <td class="product-price text-white cw-align has-title" data-title="Price">
                        <span class="product-currency"><b>$</b></span> <span
                            class="product-amount"><b>{{number_format($row->price * $row->quantity)}}</b></span>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</section>



@endsection
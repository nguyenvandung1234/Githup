@extends('layouts.main')

@section('main')

<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">Order history</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">History</li>
            </ul>
        </div>
    </div>
</section>

<section class="cart-section pt-120 pb-120">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="w-100 table-responsive mb-60">
                    <table class="table cw-cart-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="product-name">STT</th>
                                <th scope="col" class="product-qty">Ngày mua</th>
                                <th scope="col" class="product-price">TotalPrice</th>
                                <th scope="col" class="product-price">Status</th>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->orders as $order)
                            <tr>
                                <td class="product-price text-white cw-align has-title" data-title="Price">
                                    <span class="product-amount"><b>{{$loop->index +1}}</b></span>
                                </td>
                                <td class="product-price text-white cw-align has-title" data-title="Price">
                                    <span class="product-amount"><b>{{date('d-m-Y',strtotime( $order->created_at))}}</b></span>
                                </td>
                                <td class="product-price text-white cw-align has-title" data-title="Price">
                                    <span class="product-amount">${{number_format($order->TotalPrice())}}</span>
                                </td>
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
                                <td class="product-price text-white cw-align has-title" data-title="Price">
                                    <a href="{{route('order.detail',$order->id)}}"
                                        class="main-btn btn-filled float-right">Order
                                        details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
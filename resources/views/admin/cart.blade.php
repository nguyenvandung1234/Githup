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
    <div class="row">
        <div class="col-md-6">
            <h3 class="title">Shopping Cart <i class="fa fa-shopping-cart"></i></h3>
        </div>
        <div class="col-md-6">
            <h3>Quantity : {{$cart->totalquantity}}, TotalPrice : {{number_format($cart->totalprice)}} </h3>
        </div>
    </div>
    @if(count($cart->items)>0)
    <table class="table table-bordered">
        <thead>
            <tr style="background-color:chocolate;color:white">
                <th style="width:8%">Image</th>
                <th style="width:35%">Name</th>
                <th style="width:8%">Price</th>
                <th style="width:30%">Quantity</th>
                <th style="width:8%">TotalPrice</th>
                <th style="width:8%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart->items as $row)
            <form action="{{route('update.cart',$row->id)}}">
            <tr data-id="">
                <td data-th="Product">
                    <img src="/images/{{$row->image}}"  style="width:80px;height:80px" alt="" name="name">
                </td>
                <td data-th="name" style="color:brown">{{$row->name}}</td>
                <td data-th="Price" style="color:red">{{number_format($row->price)}}</td>
                <td data-th="quantity">
                    <input type="number" value="{{$row->soluong}}"  name="soluong" style="float:left;margin:0 6px;width:100px; height:34px;padding:0 10px;outline-color:red;">
                    <input type="hidden" value="{{$row->id}}" name="id" >
                   <button type="submit" class="btn btn-sm btn-success" style="height:34px">Update</button>
               </td>
               <td data-th="TotalPrice" style="color:red">{{number_format($row->soluong * $row->price)}}</td>
                <td >
                    <a href="{{route('delete.cart',$row->id)}}" onclick="return confirm('bạn có chắc muốn xóa sản phẩm này')" class="btn btn-sm btn-danger" style="height:34px"><i class="fa-solid fa-trash"  style="padding:0 6px"></i> Delete</a>
                </td>
            </tr>
            @method('PUT')
            @csrf
            </form>
            @endforeach
        </tbody>
    </table>
    <!-- thực hiện hành động -->
     <div class="text-center" style="display:flex">
        <a href="{{route('home')}}" class="btn btn-sm btn-primary">Continue shopping</a>
        <a href="{{route('clear.cart')}}" onclick="return confirm('bạn có chắc muốn xóa giỏ hàng không')" class="btn btn-sm btn-danger">Delete cart</a>
        <a href="{{route('order.checkout')}}" class="btn btn-sm btn-success">Order</a>
        <a href="{{route('order.history')}}" class="btn btn-sm btn-success">Danh sach đơn hàng</a>
     </div>

     @else

     <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong> Shopping cart is empty </strong> Shopping cart is empty,  <a href="{{route('home')}}"> Please click here </a> to continue shopping
     </div>

     @endif
@endsection




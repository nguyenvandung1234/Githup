@extends('layouts.shop')

@section('main')

<div class="row">
    <div class="col-md-4">
        <h2>Thông tin đặt hàng</h2>
        @if (count($cart->items)>0)
            
            <form action="" method="POST" role="form">
                @csrf            
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="text" class="form-control" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="">Number phone</label>
                    <input type="number" class="form-control" name="phone" value="">
                </div>
                <div class="form-group">
                    <label for="">Delivery address</label>
                    <input type="text" class="form-control" name="address" value="">
                </div>
            
                
                <button type="submit" class="btn btn-primary">Order</button>
            </form>  
        @endif

    </div>
    <div class="col-md-8">

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
            @foreach($cart->items as $item)
            <form action="{{route('update.cart',$item->id)}}">
            <tr data-id="">
                <td data-th="Product">
                    <img src="/images/{{$item->image}}"  style="width:80px;height:80px" alt="" name="name">
                </td>
                <td data-th="name" style="color:brown">{{$item->name}}</td>
                <td data-th="Price" style="color:red">{{number_format($item->price)}}</td>
                <td data-th="quantity">
                    <input type="number" value="{{$item->soluong}}"  name="soluong" style="float:left;margin:0 6px;width:100px; height:34px;padding:0 10px;outline-color:red;">
                    <input type="hidden" value="{{$item->id}}" name="id" >
                   <button type="submit" class="btn btn-sm btn-success" style="height:34px">Update</button>
               </td>
               <td data-th="TotalPrice" style="color:red">{{number_format($item->soluong * $item->price)}}</td>
                <td >
                    <a href="{{route('delete.cart',$item->id)}}" onclick="return confirm('bạn có chắc muốn xóa sản phẩm này')" class="btn btn-sm btn-danger" style="height:34px"><i class="fa-solid fa-trash"  style="padding:0 6px"></i> Delete</a>
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
        <a href="{{route('home')}}" class="btn btn-sm btn-success">Order</a>
     </div>

     @else

     <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong> Shopping cart is empty </strong> Shopping cart is empty,  <a href="{{route('home')}}"> Please click here </a> to continue shopping
     </div>

     @endif

    </div>
            
</div>

@endsection
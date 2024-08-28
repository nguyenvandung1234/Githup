@extends('layouts.MasterAdmin')

@section('main')
<div style="margin-bottom:15px;">
    <a class="btn btn-sm btn-primary" href="{{route('product.index')}}"><i class="fa-solid fa-arrow-left"></i></a>
</div>
<div class="row">
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="card" >
            <div style="padding:15px 20px;">
                <h4 style="font-size:1.6rem;" class="card-title">{{$product->name}}</h4>
            </div>
        <img class="card-img-top" src="/images/{{$product->image}}"  alt="Card image">
        <div class="card-body">
            <h4 class="card-title">{{$product->content}}</h4>
            <div>
                <p style="color:red;" class="card-text"><del>${{number_format($product->sale_price)}}</del></p>
            </div>
            <p class="">${{number_format($product->price)}}</p>
        </div>
        </div>
    </div>
    
    
</div>

@endsection
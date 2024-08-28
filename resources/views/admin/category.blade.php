@extends('layouts.shop')

@section('main')


<div class="jumbotron">
    <div class="container">
        <h1>{{$category->name}}</h1>
    </div>
</div>


<div class="row">
    @foreach ($pro as $row)
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div class="card-post">
            <img class="card-img-top" src="{{$row->image}}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{$row->name}}</h4>
                <p class="card-text">{{number_format($row->price)}}</p>
                </a>
                <a href="{{route('home.product',$row->id)}}" class="btn-view">xem chi tiết</a>
                <a href="{{route('cart.add',$row->id)}}" class="btn-view">view cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop
@extends('layouts.MasterAdmin')

@section('main')
<div class="container fluid">
    <div class="row">
        @foreach ($sp as $row)
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{$row->image}}" alt="Card image" style="width:100%; height:250px">
                <div class="card-body" style="height:200px">
                    <h4 class="card-title">{{$row->cate->name}}</h4>
                    <p class="card-text">{{$row->price}}</p>
                    <a href="{{route('chitiet', $row->id)}}" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
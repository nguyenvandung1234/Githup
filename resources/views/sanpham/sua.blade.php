@extends('layouts.MasterAdmin')

@section('main')
<form action="{{route('update', $sp->id)}}" method="post">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">name</label>
        <input type="text" class="form-control" value="{{$sp->name}}" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">price:</label>
        <input type="number" class="form-control" value="{{$sp->price}}" placeholder="Enter price" name="price">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">image</label>
        <input type="text" class="form-control" value="{{$sp->image}}" placeholder="Enter image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @method('PUT')
    @csrf
</form>

@stop
@extends('layouts.MasterAdmin')

@section('main')
@if($message=Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
</div>
@endif
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                    @error('name')
                    <i class="messages">{{$message}}</i>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">content:</label>
                    <input type="text" class="form-control" placeholder="Enter content" name="content">
                    @error('content')
                    <i class="messages">{{$message}}</i>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">image</label>
                    <input type="file" class="form-control" placeholder="Enter image" name="image">
                    @error('image')
                    <i class="messages">{{$message}}</i>
                    @enderror
                </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="pwd" class="form-label">price:</label>
                <input type="number" class="form-control" placeholder="Enter price" name="price">
                @error('price')
                <i class="messages">{{$message}}</i>
                @enderror
            </div>
            <div class="mb-3">
                    <label for="pwd" class="form-label">sale_price:</label>
                    <input type="number" class="form-control" placeholder="Enter sale_price" name="sale_price">
                    @error('sale_price')
                    <i class="messages">{{$message}}</i>
                    @enderror
            </div>
            <div class="mb-3">
                    <label for="pwd" class="form-label">Category_id</label>
                    <input type="text" class="form-control" placeholder="Enter image" name="category_id">
                    @error('category_id')
                    <i class="messages">{{$message}}</i>
                    @enderror
            </div>
            <div class="mb-3">
                    <label for="pwd" class="form-label">Status</label>
                    <select name="status" id="">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
            </div>
        </div>
    </div>
    <button type="submit" value="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> New</button>
    <a href="{{route('product.index')}}" class="btn btn-primary btn-sm">Come back</a>
    @csrf
</form>


@stop
@extends('layouts.masterAdmin')

@section('main')


<div class="col-md-4 col-md-offset-4">

    <div class="panel panel-info">
        <div class="panel-body">
            <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <legend>Form title</legend>
                @csrf

                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}"
                        placeholder="name">
                    @error('name')
                        <i class="messages">{{$message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image" value="{{$product->image}}"
                        placeholder="image">
                        <img src="/images/{{$product->image}}" width="70px" alt="">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}"
                    placeholder="price">
                </div>
                <div class="form-group">
                    <label for="">Sale_price</label>
                    <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}"
                        placeholder="sale_price">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text" class="form-control" name="content" value="{{$product->content}}"
                        placeholder="content">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Category_id</label>
                    <input type="text" class="form-control" placeholder="Enter image" value="{{$product->category_id}}"
                        name="category_id">
                    @error('category_id')
                    <i class="messages">{{$message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">status</label>

                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}>
                            Hiển thị
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}>
                            Tạm ẩn
                        </label>
                    </div>

                </div>



                <button type="submit" class="btn btn-primary btn-sm">update</button>
                <a href="{{route('product.index')}}" class="btn btn-primary btn-sm">Come back</a>
            </form>
        </div>
    </div>

</div>



@endsection
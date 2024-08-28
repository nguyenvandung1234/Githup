@extends('layouts.masterAdmin')

@section('main')


<div class="col-md-4 col-md-offset-4">

    <div class="panel panel-info">
        <div class="panel-body">
            <form action="{{route('category.update',$Category->id)}}" method="POST" role="form">
                @csrf
                @method('PUT')
                <legend>Form title</legend>
                @csrf

                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="name" value="{{$Category->name}}"
                        placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">status</label>

                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="1" {{$Category->status==1?'checked':''}}>
                            Hiển thị
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0" {{$Category->status==0?'checked':''}}>
                            Tạm ẩn
                        </label>
                    </div>

                </div>



                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                <a href="{{route('category.index')}}" class="btn btn-sm btn-primary">Come back</a>
            </form>
        </div>
    </div>

</div>



@endsection
@extends('layouts.MasterAdmin')

@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
</div>
@endif
<form action="{{route('add')}}" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">nhóm sản phẩm</label>
        <select name="category_id" id="">
            <option value="0">chọn nhóm </option>
            @foreach ($cate as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">name</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
        @error('name')
        <i>{{$message}}</i>
        @enderror
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">price:</label>
        <input type="number" class="form-control" placeholder="Enter price" name="price">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">image</label>
        <input type="text" class="form-control" placeholder="Enter image" name="image">
        @error('image')
        <i>{{$message}}</i>
        @enderror
    </div>
    <button type="submit" class="btn btn-success btn-sm">thêm</button>
    <a href="{{route('danhsach')}}" class="btn btn-primary btn-sm">Quay lại</a>
    @csrf
</form>

@stop
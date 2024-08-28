@extends('layouts.MasterAdmin')

@section('main')
<div class="container mt-3">
    <h2>Danh mục sản phẩm</h2>
    <hr>
    <a href="{{route('them')}}" class="btn btn-primary">Thêm sản phẩm</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nhóm</th>
                <th>name</th>
                <th>image</th>
                <th>price</th>
                <th>hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sp as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->name}}</td>
                <td><img src="{{$row->image}}" width="100px" alt=""></td>
                <td>{{$row->price}}</td>
                <td>
                    <form action="{{route('delete', $row->id)}}" method="post">
                        <a href="{{route('sua', $row->id)}}" class="btn btn-info">Sửa</a>
                        <button class="btn btn-danger">Xóa</button>
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
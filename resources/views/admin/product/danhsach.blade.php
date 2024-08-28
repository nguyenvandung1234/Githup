@extends('layouts.MasterAdmin')

@section('main')
<div class="container mt-3">
    <h2 class="title">Danh sách sản phẩm</h2>
    
    <form action="" class="form-inline" >
    
        <div class="form-group">
            <label class="sr-only" for="">Sarch</label>
            <input class="form-control"  name="key" placeholder="Search...">
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </form>
    
    <hr>
    <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Add product</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Sale_price</th>
                <th>Price</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pro as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td><img src="/images/{{$row->image}}" width="70px" alt=""></td>
                <td>{{number_format($row->sale_price)}}</td>
                <td>{{number_format($row->price)}}</td>
                <td>{{\Str::limit($row->content,8)}}</td>
                <td  style="text-align: right;">
                    <form action="{{route('product.destroy', $row->id)}}" method="post">
                        <a href="{{route('product.show',$row->id)}}" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-folder"></i></i>
                        </a>
                        <a href="{{route('product.edit', $row->id)}}" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $pro->links() !!}
</div>

@stop
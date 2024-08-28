@extends('layouts.MasterAdmin')

@section('main')
<div class="container mt-3">
    <h2>Categories</h2>
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
    <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">Add categoris</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cate as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->status}}</td>
                <td  style="text-align: right;">
                    <form action="{{route('category.destroy', $row->id)}}" method="post">
                        <a href="{{route('category.edit', $row->id)}}" class="btn btn-sm btn-info">
                        <i class="fa-solid fa-pencil"></i>
                        </a>
                        <button class="btn btn-sm btn-danger">
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
</div>

@stop
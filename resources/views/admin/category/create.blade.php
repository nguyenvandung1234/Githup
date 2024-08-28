@extends('layouts.MasterAdmin')

@section('main')

<form action="{{route('category.store')}}" method="post">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">name</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
        @error('name')
        <i>{{$message}}</i>
        @enderror
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">status :</label>

        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" checked>
                Hiển thị
            </label>
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="status" value="0">
                Tạm ẩn
            </label>
        </div>

    </div>
    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i>add</button>
    <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">Come back</a>
    @csrf
</form>

@stop
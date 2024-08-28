@extends('layouts.master')


@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
</div>
@endif

<form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Upload</label>
        <input type="text" class="form-control" placeholder="Enter email" name="upload">
        @error('upload')
        <small class="help-block text-danger">{{$message}}</small>
        @enderror
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

@stop
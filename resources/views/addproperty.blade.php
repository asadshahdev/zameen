@extends('layout')

@section('title')
    Add Property
@endsection

@section('content')
    <form action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <input type="file" name="photo" accept="img/*">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success btn-sm">
        </div>
    </form>
@endsection
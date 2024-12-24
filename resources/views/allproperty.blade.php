@extends('layout')

@section('title')
    All property
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>active</th>
        <th>created_at</th>
        <th>updated_at</th>
     </tr>
     @foreach ($property as $property)
         <tr>
            <td>{{$property->id}}</td>
            <td>{{$property->title}}</td>
            <td>{{$property->description}}</td>
            <td>{{$property->is_active}}</td>
            <td>{{$property->created_at}}</td>
            <td>{{$property->updated_at}}</td>
         </tr>
     @endforeach
</table>
@endsection
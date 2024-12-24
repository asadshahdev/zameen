@extends('layout')

@section('title')
    Dealer Dashboard
@endsection

@section('content')
    <h4> WellCome {{ Auth::User()->name }}!</h4>
    <a href="{{ route('logout') }}" class="btn btn-success btn-sm">Logout</a>
    <a href="{{ route('property.index') }}" class="btn btn-primary btn-sm">All property</a>
    <a href="{{route('property.create')}}" class="btn btn-warning btn-sm">Add Property</a>
@endsection
@extends('layout')

@section('title')
    Client Dashboard
@endsection

@section('content')
<h4> WellCome {{ Auth::User()->name }}!</h4>
<a href="{{ route('logout') }}" class="btn btn-success btn-sm">Logout</a>
@endsection
@extends('layout')

@section('title')
    Client Dashboard
@endsection

@section('content')
<h4> WeleCome {{ Auth::User()->name }}!</h4>
<a href="{{ route('logout') }}" class="btn btn-success btn-sm">Logout</a>
@endsection
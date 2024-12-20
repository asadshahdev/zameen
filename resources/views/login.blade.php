@extends('layout')

@section('title')
    Login
@endsection

@section('content')
    <form action="{{route('loginmatch')}}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="useremail" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="username">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success btn-sm">Login</button>
            <a href="{{ route('register') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
    </form>
@endsection
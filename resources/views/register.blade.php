@extends('layout')

@section('title')
    Register Your data
@endsection

@section('content')
    <form action="{{ route('registersave') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="username" class="form-babel">Name</label>
            <input type="text" class="form-control" name="name" id="username">
        </div>
        <div class="mb-2">
            <label for="useremail" class="form-babel">Email</label>
            <input type="text" class="form-control" name="email" id="username">
        </div>
        <div class="mb-2">
            <label for="password" class="form-babel">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-2">
            <label for="confirm-password" class="form-babel">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>
        <div class="mb-2">
            <label for="phonenumber" class="form-babel">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="phonenumber">
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success btn-sm">Register</button>
            <a href="{{ route('login') }}" class="btn btn-warning btn-sm">Login</a>
        </div>
    </form>
@endsection
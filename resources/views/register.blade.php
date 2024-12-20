@extends('layout')

@section('title')
    Register Your data
@endsection

@section('content')
    <form action="{{ route('registersave') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="username" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="username">
        </div>
        <div class="mb-2">
            <label for="useremail" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="username">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-2">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="confirm-password">
        </div>
        <div class="mb-2">
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="phonenumber">
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success btn-sm">Register</button>
            <a href="{{ route('login') }}" class="btn btn-warning btn-sm">Login</a>
        </div>
    </form>
@endsection
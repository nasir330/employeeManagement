@extends('layouts.app')
@section('title','Register')

@section('content')
<div class="col-md-5 card login-form">
    @if(session()->has('success'))
    <div id="successMessage" class="text-center text-success p-1">
        {{session('success')}}
    </div>
    @endif
    @if(session()->has('error'))
    <div id="successMessage" class="text-center text-danger p-1">
        {{session('error')}}
    </div>
    @endif
    <x-input-error :messages="$errors->get('email')" style="list-style:none;" class="text-danger mt-2" />
    <x-input-error :messages="$errors->get('username')" style="list-style:none;" class="text-danger mt-2" />
    <div class="text-center mt-2">
        <!-- <h5>User Login</h5> -->
        <h4>User Registration</h4>
    </div>
    <!-- Login section start -->
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="card-body text-white">

            <div class="form-group">
                <label for="email" class="mb-0">Email address</label>
                <div class="input-group mb-2">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="mb-0">User password</label>
                <div class="input-group mb-2">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="mb-0">Confirm password</label>
                <div class="input-group mb-2">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Re-type password" required>
                </div>
            </div>
            <div class="input-group mt-3">
                <button class="form-control btn theme-btn">Register</button>
            </div>
    </form>

    <!-- Login section end -->
</div>
@endsection
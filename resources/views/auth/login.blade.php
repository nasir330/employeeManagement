@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="col-md-5 card login-form">
    @if(session()->has('success'))
    <div id="successMessage" class="text-center text-success p-1">
        {{session('success')}}
    </div>
    @endif
    @if(session()->has('error'))
    <div style="color:red;" id="errorMsg" class="text-center p-1">
        {{session('error')}}        
    </div>
    @endif
    <x-input-error :messages="$errors->get('email')" style="list-style:none;" class="text-danger mt-2" />
    <x-input-error :messages="$errors->get('username')" style="list-style:none;" class="text-danger mt-2" />
    <div class="text-center mt-2">
        <!-- <h5>User Login</h5> -->
        <h4>User Login</h4>
    </div>
    <!-- Login section start -->
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="card-body text-white">
            <div class="form-group">
                <label for="username">User Email</label>
                <div class="input-group mb-2">
                    <input type="email" name="email" class="form-control" placeholder="Enter email address">
                </div>
            </div>

            <div class="form-group">
                <label for="email">User password</label>
                <div class="input-group mb-2">
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>
            </div>
            <div class="input-group">
                <button class="form-control btn theme-btn">Login</button>
            </div>
    </form>
    <div class="row text-right mt-3">
        <a href="{{route('password.request')}}"> <strong>Forgot password ?</strong> </a>
    </div>
    <!-- Login section end -->
</div>
@endsection
@extends('layouts.header')
@section('title','Personal Profile')

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <form action="#" method="POST">
                            @csrf
                            <div class="card mcard_3">
                                <div class="body">
                                    <span id="photoEdit" class="photo-edit-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="icon fa-solid fa-camera p-2"></i>
                                        </a>
                                    </span>
                                    <img src="{{asset('')}}{{Auth::user()->employees->photo}}"
                                        class="rounded-circle shadow mb-4" alt="profile-image">
                                    <div class="mb-3">
                                        <input type="hidden" name="contactId" value="{{Auth::user()->id}}">
                                        <input class="form-control mb-2" type="text" name="name"
                                            value="{{Auth::user()->employees->firstName. ' '.Auth::user()->employees->lastName}}">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control mb-2" type="text" name="name"
                                            value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control mb-2" type="text" name="company" value="">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control mb-2" type="text" name="phone" value="">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control mb-2" type="text" name="address" value="">
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="card-header mb-3">
                                    <h5> Password update section</h5>
                                </div>
                                @if(session()->has('success'))
                                <div class="row">
                                    <div class="alert-success d-flex justify-content-center">
                                        {{session('success')}}</div>
                                </div>
                                @endif
                                <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                    style="list-style:none; color:red;" class="mt-2" />
                                <x-input-error :messages="$errors->updatePassword->get('password')"
                                    style="list-style:none; color:red;" class="mt-2" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                    style="list-style:none; color:red;" class="mt-2" />
                                <form action="{{route('password.update')}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="current_password">Current Password</label>
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                            <input type="password" name="current_password" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">New Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation">Confirm Password </label>
                                        <div class="input-group">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@include('templates.modal.profilePhoto')
@endsection

@extends('layouts.header')
@section('title','Send Registration Link')

@section('content')

<!-- sales overview start -->
<div class="row clearfix row-deck">
    <div class="col mb-2">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Generate Registration Link</h3>
                @if(session()->has('success'))
                <div id="successMessage" class="text-center text-success p-2 ml-3">
                    <span style="color:green;">{{session('success')}}</span>
                </div>
                @endif
            </div>
            <div class="card-body p-2">
                <form action="{{route('sendLink.employee')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div id="boxitem" class="row">
                        <!-- Personal and Auth Information start -->
                        <div class="col-md-6">                          

                            <!-- Auth info start -->
                            <div class="card">
                                <div class="card-header">
                                    Authentication
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                    <div class="col-md-6">
                                            <label for="firstName" class="mb-0">First Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="Enter first name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="mb-0">Last Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="lastName" class="form-control"
                                                    placeholder="Enter last name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nickName" class="mb-0">Nick Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="nickName" class="form-control"
                                                    placeholder="Enter Nick Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="userType" class="mb-0">User Type</label>
                                            <div class="input-group mb-2">
                                                <select name="userType" class="form-select form-control" required>
                                                    <option value="">--Select User Type--</option>
                                                    @foreach($userTypes as $key=> $userType)
                                                    <option value="{{$userType->id}}">
                                                        {{$userType->type}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="mb-0">Email address</label>
                                            <div class="input-group mb-2">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Auth info end -->
                        </div>
                        <!-- Personal and Auth Information end -->                      
                    </div>

                    <div class="row mb-2">
                        <div class="input-group">
                            <button class="btn btn-primary">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- sales overview end -->
@endsection
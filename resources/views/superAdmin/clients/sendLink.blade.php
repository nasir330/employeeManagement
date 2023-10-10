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
                <form action="{{route('admin.sendLink.client')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div id="boxitem" class="row">
                        <!-- Auth info start -->
                        <div class="col-md-6">
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
                                                <select id="userType" name="userType" class="form-select form-control"
                                                    required>
                                                    <option value="{{$userTypes->id}}">{{$userTypes->type}}</option>                                                   
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
                        </div>
                        <!-- Auth info end -->
                        <div class="col-md-6">                            
                            <!-- Employee onselect info start -->
                            <div id="employee" class="card">
                                <div class="card-header">
                                    Client
                                </div>
                                <div class="card-body">
                                    <div class="col mb-2">
                                        <label for="phone">Phone Number:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        id="countryDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="flag-icon flag-icon-us"></span>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="countryDropdown">
                                                        <a class="dropdown-item" href="#" data-code="+1" data-flag="us">
                                                            <span class="flag-icon flag-icon-us"></span> United
                                                            States (+1)
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-code="+44"
                                                            data-flag="gb">
                                                            <span class="flag-icon flag-icon-gb"></span> United
                                                            Kingdom (+44)
                                                        </a>
                                                        <!-- Add more dropdown items for each country -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group-prepend">
                                                <input style="width:80px;" type="text" class="form-control"
                                                    id="countryCode" name="countryCode">
                                            </div>
                                            <input type="tel" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="whatsappNumber" class="mb-0">Whatsapp</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="whatsappNumber" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Employee onselect info end -->                            
                        </div>

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
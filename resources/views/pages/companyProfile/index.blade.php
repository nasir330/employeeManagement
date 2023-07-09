@extends('layouts.header')
@section('title','Company Details')

@section('content')
    <!-- sales overview start -->
    <div class="row clearfix row-deck">
        <div class="col-12 col-sm-12">
            <div class="row">
                <!-- tab-menu header start -->
                <div class="col mb-2">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="companyDetailsTab" data-toggle="pill" href="#companyDetails"
                                role="tab" aria-controls="companyDetails" aria-selected="true">Company
                                Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="logoHeaderFooterTab" data-toggle="pill" href="#logoHeaderFooter"
                                role="tab" aria-controls="logoHeaderFooter" aria-selected="true">Logo &
                                Header/Footer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="paymentTab" data-toggle="pill" href="#payment" role="tab"
                                aria-controls="payment" aria-selected="true">Payment &
                                Account</a>
                        </li>
                    </ul>

                </div>
                <!-- tab-menu header end -->

                <!-- tab-menu body start -->
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <!-- Company Details start -->
                    <div class="tab-pane fade show active" id="companyDetails" role="tabpanel"
                        aria-labelledby="companyDetailsTab">
                        <!-- success message start -->
                        @if(session()->has('success'))
                        <div class="card-header text-center">
                            <div id="successMessage" class="text-center text-success p-2 ml-3">
                                <span style="color:green;">{{session('success')}}</span>
                            </div>
                        </div>
                        @endif
                        <!-- success message end -->

                        @if(empty($data))
                        <form action="{{route('setting.profile.companyDetails')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="companyName" class="mb-0">Company Name</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="companyName" class="form-control"
                                                placeholder="Enter Company Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="mb-0">Phone Number</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Enter Company Phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="email" class="mb-0">Email Address</label>
                                        <div class="input-group mb-2">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Company Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="website" class="mb-0">Website</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="website" class="form-control"
                                                placeholder="Enter Company Website" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="address" class="mb-0">Company Address</label>
                                        <div class="input-group mb-2">
                                            <textarea name="address" id="" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="city" class="mb-0">City</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="city" class="form-control"
                                                placeholder="Enter Company City" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="state" class="mb-0">State</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="state" class="form-control"
                                                placeholder="Enter Company State" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="zip" class="mb-0">Zipcode</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="zip" class="form-control"
                                                placeholder="Enter Company Zipcode" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="country" class="mb-0">Country</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="country" class="form-control"
                                                placeholder="Enter Country" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="{{route('setting.profile.companyDetails')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="companyName" class="mb-0">Company Name</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="companyName" class="form-control"
                                                value="{{$data->companyName}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="mb-0">Phone Number</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="phone" class="form-control"
                                                value="{{$data->phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="email" class="mb-0">Email Address</label>
                                        <div class="input-group mb-2">
                                            <input type="email" name="email" class="form-control"
                                                value="{{$data->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="website" class="mb-0">Website</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="website" class="form-control"
                                                value="{{$data->website}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="address" class="mb-0">Company Address</label>
                                        <div class="input-group mb-2">
                                            <textarea style="white-space: pre-line" name="address" id=""
                                                class="form-control" rows="3">{{$data->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="city" class="mb-0">City</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="city" class="form-control" value="{{$data->city}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="state" class="mb-0">State</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="state" class="form-control"
                                                value="{{$data->state}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="zip" class="mb-0">Zipcode</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="zip" class="form-control" value="{{$data->zip}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="country" class="mb-0">Country</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="country" class="form-control"
                                                value="{{$data->country}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                    <!-- Company Details end -->

                    <!-- Logo Header Footer start -->
                    <div class="tab-pane fade" id="logoHeaderFooter" role="tabpane2"
                        aria-labelledby="logoHeaderFooterTab">
                        @if(empty($data))
                        <form action="{{route('setting.profile.logoHeaderFooter')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="logo" class="mb-0">Company Logo</label>
                                        <div class="input-group mb-2">
                                            <input type="file" name="logo" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="headerTitle" class="mb-0">Header
                                            Title</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="headerTitle" class="form-control"
                                                placeholder="Enter Header Title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="footer" class="mb-0">Footer text</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="footer" class="form-control"
                                                placeholder="Enter Footer text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="{{route('setting.profile.logoHeaderFooter')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6 mb-2">
                                        @if(empty($data->logo))
                                        <label for="logo" class="mb-0">Company Logo</label>
                                        <div class="input-group mb-2">
                                            <input type="file" name="logo" class="form-control" required>
                                        </div>
                                        @else
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div id="companyLogo" class="text-center">
                                                    <img src="{{asset('')}}{{$data->logo}}" class="img-fluid"
                                                        alt="User Image">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="logo" class="mb-0">Company Logo</label>
                                                <div class="input-group mb-2">
                                                    <input type="file" name="logo" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="headerTitle" class="mb-0">Header
                                            Title</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="headerTitle" class="form-control"
                                                value="{{$data->headerTitle}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="footer" class="mb-0">Footer text</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="footer" class="form-control"
                                                value="{{$data->footer}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                    <!-- Logo Header Footer end -->

                    <!-- Payment and Account start -->
                    <div class="tab-pane fade" id="payment" role="tabpane3" aria-labelledby="paymentTab">
                        @if(empty($data))
                        <form action="{{route('setting.profile.paymentAccount')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="currency" class="mb-0">Currency Type</label>
                                        <div class="input-group mb-2">
                                            <select name="currency" class="form-select form-control" required>
                                                <option value="">--Select Currency Type--</option>
                                                <option value="USD">USD</option>
                                                <option value="GBP">GBP</option>
                                                <option value="EUR">EUR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="walletName" class="mb-0">E-Wallet Name</label>
                                        <div class="input-group mb-2">
                                            <select name="walletName" class="form-select form-control" required>
                                                <option value="">--Select E-Wallet Name--</option>
                                                <option value="Skrill">Skrill</option>
                                                <option value="Paypal">PayPal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="walletAccount" class="mb-0">E-Wallet
                                            email</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="walletAccount" class="form-control"
                                                placeholder="Enter E-Wallet email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="{{route('setting.profile.paymentAccount')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="currency" class="mb-0">Currency Type</label>
                                        <div class="input-group mb-2">
                                            <select name="currency" class="form-select form-control">
                                                <option value="{{$data->currency}}">{{$data->currency}}</option>
                                                <option value="USD">USD</option>
                                                <option value="GBP">GBP</option>
                                                <option value="EUR">EUR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="walletName" class="mb-0">E-Wallet Name</label>
                                        <div class="input-group mb-2">
                                            <select name="walletName" class="form-select form-control">
                                                <option value="{{$data->walletName}}">{{$data->walletName}}</option>
                                                <option value="Skrill">Skrill</option>
                                                <option value="Paypal">PayPal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="walletAccount" class="mb-0">E-Wallet
                                            email</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="walletAccount" class="form-control"
                                                value="{{$data->walletAccount}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mt-2">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                    <!-- Payment and Account end -->
                </div>
                <!-- tab-menu body end -->
            </div>
        </div>

    </div>
@endsection
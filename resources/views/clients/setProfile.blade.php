@extends('layouts.app')
@section('title','Create Employee')

@section('content')

<!-- sales overview start -->
<div class="row clearfix row-deck">
    <div class="col-md-10 offset-md-1 mb-2">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Complete your Profile</h3>
                {{Auth::user()->clients->nickName}}
                @if(session()->has('success'))
                <div id="successMessage" class="text-center text-success p-2 ml-3">
                    <span style="color:green;">{{session('success')}}</span>
                </div>
                @endif
            </div>
            <div class="card-body p-2">
                <form action="{{route('set.profile.client')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div id="boxitem" class="row">
                        <!-- Personal and Auth Information start -->
                        <div class="col-md-6">
                            <!-- Personal info start -->
                            <div class="card">
                                <div class="card-header">
                                    Personal Information
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="firstName" class="mb-0">First Name</label>
                                            <div class="input-group mb-2">
                                                <input type="hidden" name="profileId" value="{{Auth::user()->id}}">
                                                <input type="text" name="firstName" class="form-control"
                                                    value="{{Auth::user()->clients->firstName}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="mb-0">Last Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="lastName" class="form-control"
                                                    value="{{Auth::user()->clients->lastName}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="nickName" class="mb-0">Nick Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="nickName" class="form-control"
                                                    value="{{Auth::user()->clients->nickName}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fathersName" class="mb-0">Fathers
                                                Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="fathersName" class="form-control"
                                                    placeholder="Enter fathers name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <label for="gender" class="mb-0">Gender</label>
                                            <div class="input-group mb-2">
                                                <select name="gender" class="form-select form-control" required>
                                                    <option value="">--Select Gender--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="dob" class="mb-0">Date of Birth</label>
                                            <div class="input-group mb-2">
                                                <input type="date" name="dob" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="mb-0">Phone</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{Auth::user()->clients->phone1}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="phone2" class="mb-0">Secondary Phone</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="phone2" class="form-control"
                                                    placeholder="Secondary Phone number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="whatsappNo" class="mb-0">WhatsApp Number</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="whatsappNo" class="form-control"
                                                    value="{{Auth::user()->clients->whatsappNo}}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="referenceName" class="mb-0">Reference</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="referenceName" class="form-control"
                                                    placeholder="Reference Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="referencePhone" class="mb-0">Reference
                                                Phone</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="referencePhone" class="form-control"
                                                    placeholder="Reference Phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="govId" class="mb-0">Identity</label>
                                            <div class="input-group mb-2">
                                                <select name="govId" class="form-select form-control" required>
                                                    <option value="">--Identity Type--</option>
                                                    <option value="NID">National Id Card</option>
                                                    <option value="Passport">Passport</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="govIdNo" class="mb-0">Identity
                                                Number</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="govIdNo" class="form-control"
                                                    placeholder="Identity Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-9">
                                            <label for="photo" class="mb-0">Photo</label>
                                            <div class="input-group mb-2">
                                                <input type="file" name="photo" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Present Address -->
                                    <div class="row mb-2">
                                        <div class="card-header">
                                            <label for="">Present Address</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="address1" class="mb-0">Address</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="address1" class="form-control"
                                                    placeholder="Enter address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="townCity1" class="mb-0">Town/City</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="townCity1" class="form-control"
                                                    placeholder="Town/City Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="postZipCode1" class="mb-0">Post code / Zip code</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="postZipCode1" class="form-control"
                                                    placeholder="Post code / Zip code">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="state1" class="mb-0">State</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="state1" class="form-control"
                                                    placeholder="State Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="country1" class="mb-0">Country</label>
                                            <div class="input-group mb-2">
                                                <select name="country1" class="form-select form-control" required>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="UK">UK</option>
                                                    <option value="US">US</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Parmanent Address -->
                                    <div class="row mb-2">
                                        <div class="card-header">
                                            <label for="">Parmanent Address</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="address2" class="mb-0">Address</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="address2" class="form-control"
                                                    placeholder="Enter address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="townCity2" class="mb-0">Town/City</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="townCity2" class="form-control"
                                                    placeholder="Town/City Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="postZipCode2" class="mb-0">Post code / Zip code</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="postZipCode2" class="form-control"
                                                    placeholder="Post code / Zip code">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="state2" class="mb-0">State</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="state2" class="form-control"
                                                    placeholder="State Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="country2" class="mb-0">Country</label>
                                            <div class="input-group mb-2">
                                                <select name="country2" class="form-select form-control" required>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="UK">UK</option>
                                                    <option value="US">US</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal info end -->

                        </div>
                        <!-- Personal and Auth Information end -->

                        <!-- Others Information start -->
                        <div class="col-md-6">
                            <!-- Company info start -->
                            <div class="card">
                                <div class="card-header">
                                    Company Information
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="joinDate" class="mb-0">Joining Date</label>
                                            <div class="input-group mb-2">
                                                <input type="date" name="joinDate" class="form-control"
                                                    placeholder="Joining Date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="leaveDate" class="mb-0">Leaving Date</label>
                                            <div class="input-group mb-2">
                                                <input type="date" name="leaveDate" class="form-control"
                                                    placeholder="Leaving Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="status" class="mb-0">Status</label>
                                            <div class="input-group mb-2">
                                                <select name="status" class="form-select form-control" required>
                                                    <option value="">--Status--</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Company info end -->

                            <!-- Financial info start -->
                            <div class="card">
                                <div class="card-header">
                                    Financial Information
                                </div>
                                <div class="card-body">
                                    <div class="row mb-1">
                                        <div class="col">
                                            <label for="bankName" class="mb-0">Bank Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="bankName" class="form-control"
                                                    placeholder="Bank Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-6">
                                            <label for="accHolderName" class="mb-0">Account Holder
                                                Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="accHolderName" class="form-control"
                                                    placeholder="Account Holder Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="accNumber" class="mb-0">Account
                                                Number</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="accNumber" class="form-control"
                                                    placeholder="Account Number" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-6">
                                            <label for="bankSortCode" class="mb-0">Bank Sort Code </label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="bankSortCode" class="form-control"
                                                    placeholder="Bank Sort Code" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bankRoutingCode" class="mb-0">Routing Code</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="bankRoutingCode" class="form-control"
                                                    placeholder="Routing Code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-4">
                                            <label for="swiftCode" class="mb-0">Swift Code</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="swiftCode" class="form-control"
                                                    placeholder="Swift Code" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label for="address1" class="mb-0">Address </label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="address1" class="form-control"
                                                    placeholder="Address line 1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">                                       
                                        <div class="col-md-8">
                                            <label for="address2" class="mb-0">Address Line 2 </label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="address2" class="form-control"
                                                    placeholder="Address line 2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="townCity" class="mb-0">Town/City</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="townCity" class="form-control"
                                                    placeholder="Town/City" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-6">
                                            <label for="stateProvision" class="mb-0">State/Provision </label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="stateProvision" class="form-control"
                                                    placeholder="State / Provision" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="country" class="mb-0">Country</label>
                                            <div class="input-group mb-2">
                                                <select name="country" class="form-select form-control" required>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="UK">UK</option>
                                                    <option value="US">US</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Financial info end -->
                        </div>
                        <!-- Others Information start -->
                    </div>

                    <div class="row mb-2">
                        <div class="input-group">
                            <button class="col-md-4 btn btn-primary">
                                Submit
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
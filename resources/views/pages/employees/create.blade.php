@extends('layouts.header')
@section('title','Create Account')

@section('content')

<!-- sales overview start -->
<div class="row clearfix row-deck">
    <div class="col mb-2">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Create Employees Account</h3>
                @if(session()->has('success'))
                <div id="successMessage" class="text-center text-success p-2 ml-3">
                    <span style="color:green;">{{session('success')}}</span>
                </div>
                @endif
            </div>
            <div class="card-body p-2">
                <form action="{{route('admin.add.employee')}}" method="post" enctype="multipart/form-data">
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
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="nickName" class="mb-0">Nick Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="nickName" class="form-control"
                                                    placeholder="Enter Nick Name" required>
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
                                            <label for="presentAddress" class="mb-0">Present
                                                Address</label>
                                            <div class="input-group mb-2">
                                                <textarea name="presentAddress" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="permanentAddress" class="mb-0">Permanent
                                                Address</label>
                                            <div class="input-group mb-2">
                                                <textarea name="permanentAddress" cols="30" rows="3"></textarea>
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
                                                    placeholder="Phone number" required>
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
                                </div>
                            </div>
                            <!-- Personal info end -->

                            <!-- Auth info start -->
                            <div class="card">
                                <div class="card-header">
                                    Authentication
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="email" class="mb-0">Email</label>
                                            <div class="input-group mb-2">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter email" required>
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
                                    </div>
                                </div>
                            </div>
                            <!-- Auth info end -->
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
                                            <label for="department" class="mb-0">Department</label>
                                            <div class="input-group mb-2">
                                                <select id="department" name="department"
                                                    class="form-select form-control" required>
                                                    <option value="">--Select Department--</option>
                                                    @foreach($departments as $key=> $department)
                                                    <option value="{{$department->id}}">
                                                        {{$department->department}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="designation" class="mb-0">Designation</label>
                                            <div class="input-group mb-2">
                                                <select name="designation" class="form-select form-control" required>
                                                    <option value="">--Select Designation--</option>
                                                    @foreach($designations as $key=> $designation)
                                                    <option value="{{$designation->id}}">
                                                        {{$designation->designation}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="col-md-6">
                                            <label for="shift" class="mb-0">Shift</label>
                                            <div class="input-group mb-2">
                                                <select name="shift" class="form-select form-control" required>
                                                    <option value="">--Shift--</option>
                                                    <option value="Day">Day</option>
                                                    <option value="Night">Night</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-9">
                                            <label for="hiringManager" class="mb-0">Hiring
                                                Manager</label>
                                            <div class="input-group mb-2">
                                                <select name="hiringManager" class="form-select form-control" required>
                                                    <option value="">--Select Manager--</option>
                                                    <option value="HR Manager">HR Manager</option>
                                                    <option value="Executive Manager">Executive
                                                        Manager</option>
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
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="salaryType" class="mb-0">Salary Type</label>
                                            <div class="input-group mb-2">
                                                <select name="salaryType" class="form-select form-control" required>
                                                    <option value="">--Salary Type--</option>
                                                    <option value="Monthly">Monthly</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Daily">Daily</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="payScale" class="mb-0">Pay Scale</label>
                                            <div class="input-group mb-2">
                                                <select name="payScale" class="form-select form-control" required>
                                                    <option value="">--Pay Scale--</option>
                                                    <option value="10000">10000</option>
                                                    <option value="2400">2400</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
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
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label for="bankName" class="mb-0">Bank Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="bankName" class="form-control"
                                                    placeholder="Bank Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="branch" class="mb-0">Branch Name</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="branch" class="form-control"
                                                    placeholder="Branch Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="branchCode" class="mb-0">Branch Code</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="branchCode" class="form-control"
                                                    placeholder="Branch Code" required>
                                            </div>
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
                            <button class="btn btn-primary">
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
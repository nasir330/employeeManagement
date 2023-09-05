@extends('layouts.header')
@section('title','Create Employee')

@section('content')
<div class="row clearfix row-deck">
    @if(session()->has('success'))
    <div id="successMessage" class="text-center text-success p-2 ml-3">
        <span style="color:green;">{{session('success')}}</span>
    </div>
    @endif
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                {{$employee->employees->firstName.' '.$employee->employees->lastName}}
            </div>
            <div class="card-body">
                <div id="employeePhoto" class="text-center">
                    <img src="{{asset('')}}{{$employee->employees->photo}}" class="img-fluid" alt="User Image">
                    <div class="photo-edit-btn">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#photoEdit">
                            <i class="icon fa-solid fa-camera"></i>
                        </a>
                    </div>
                </div>
                <h4 class="text-center mt-2">
                    @if(!empty($employee->employees->departments))
                    {{$employee->employees->departments->department}} <br>
                    <span style="font-size:16px;">
                        {{$employee->employees->departments->designations->designation}}
                    </span>
                    @else
                    {{'NA'}} <br>
                    <span style="font-size:16px;">
                        {{'NA'}}
                    </span>
                    @endif

                </h4>
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="personalInfo" data-toggle="pill" href="#tab-personalInfo" role="tab"
                        aria-controls="tab-personalInfo" aria-selected="true">Personal Information</a>
                    <a class="nav-link" id="companyInfo" data-toggle="pill" href="#tab-companyInfo" role="tab"
                        aria-controls="tab-companyInfo" aria-selected="false">Company
                        Information</a>
                    <a class="nav-link" id="financialInfo" data-toggle="pill" href="#tab-financialInfo" role="tab"
                        aria-controls="tab-financialInfo" aria-selected="false">Financial</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 tab-content" id="vert-tabs-tabContent">
        <!-- Personal Information card start -->
        <div class="card tab-pane text-left fade show active" id="tab-personalInfo" role="tabpanel"
            aria-labelledby="personalInfo">
            <div class="card-header">
                {{'Personal Details'}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('infoUpdate.employee')}}" method="post">
                        @csrf
                        <table class="table table-bordered text-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <td style="width:30%;">First Name</td>
                                    <td>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input class="form-control" type="text" name="firstName"
                                            value="{{$employee->employees->firstName}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Last Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="lastName"
                                            value="{{$employee->employees->lastName}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Fathers Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="fathersName"
                                            value="{{$employee->employees->fathersName}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Gender</td>
                                    <td>
                                        <div class="input-group mb-2">
                                            <select name="gender" class="form-select form-control" required>
                                                <option value="{{$employee->employees->gender}}">
                                                    {{$employee->employees->gender}}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Birth Date</td>
                                    <td>
                                        <input class="form-control" type="date" name="dob"
                                            value="{{$employee->employees->dob}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Contact No</td>
                                    <td>
                                        <input class="form-control" type="text" name="phone"
                                            value="{{$employee->employees->phone}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Present Address</td>
                                    <td style="white-space: pre-line">
                                        <textarea class="form-control" name="presentAddress"
                                            rows="5"> {{$employee->employees->presentAddress}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Permanent Address</td>
                                    <td style="white-space: pre-line">
                                        <textarea class="form-control" name="permanentAddress"
                                            rows="5"> {{$employee->employees->permanentAddress}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Reference by</td>
                                    <td>
                                        <input class="form-control" type="text" name="referenceName"
                                            value="{{$employee->employees->referenceName}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Reference Contact</td>
                                    <td>
                                        <input class="form-control" type="text" name="referencePhone"
                                            value="{{$employee->employees->referencePhone}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Identity Type</td>
                                    <td>
                                        <input class="form-control" type="text" name="govId"
                                            value="{{$employee->employees->govId}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Identity No</td>
                                    <td>
                                        <input class="form-control" type="text" name="govIdNo"
                                            value="{{$employee->employees->govIdNo}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-4 mt-2">
                            <button type="submit" class="btn btn-primary form-control">
                                Update Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Personal Information card end -->

        <!-- Company Information card start -->
        <div class="card tab-pane text-left fade" id="tab-companyInfo" role="tabpanel" aria-labelledby="companyInfo">
            <div class="card-header">
                {{'Company Information'}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('companyInfoUpdate.employee')}}" method="post">
                        @csrf
                        <table class="table table-bordered text-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <td style="width:30%;">Department</td>
                                    <td>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <select name="department" class="form-select form-control" required>
                                            @if(!empty($employee->employees->departments))
                                            <option value="{{$employee->employees->department}}">
                                                {{$employee->employees->departments->department}}
                                            </option>
                                            @else
                                            @foreach($departments as $key=> $department)
                                            <option value="{{$department->id}}">
                                                {{$department->department}}</option>
                                            @endforeach
                                            @endif
                                            
                                           
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Designation</td>
                                    <td>
                                        <select name="designation" class="form-select form-control" required>
                                            @if(!empty($employee->employees->departments->designations))
                                            <option value="{{$employee->employees->designation}}">
                                                {{$employee->employees->departments->designations->designation}}
                                            </option>
                                            @else
                                            @foreach($designations as $key=> $designation)
                                            <option value="{{$designation->id}}">
                                                {{$designation->designation}}</option>
                                            @endforeach
                                            @endif
                                            
                                           
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Join Date</td>
                                    <td>
                                        <input class="form-control" type="date" name="joinDate"
                                            value="{{$employee->employees->joinDate}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Leave Date</td>
                                    <td>
                                        <input class="form-control" type="date" name="leaveDate"
                                            value="{{$employee->employees->leaveDate}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Status</td>
                                    <td>
                                        <select name="status" class="form-select form-control" required>
                                            <option value="{{$employee->employees->status}}">
                                                {{$employee->employees->status}}</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Shift</td>
                                    <td>
                                        <select name="shift" class="form-select form-control" required>
                                            <option value="{{$employee->employees->shift}}">
                                                {{$employee->employees->shift}}</option>
                                            <option value="Day">Day</option>
                                            <option value="Night">Night</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Hiring Manager</td>
                                    <td>
                                        <select name="hiringManager" class="form-select form-control" required>
                                            <option value="{{$employee->employees->hiringManager}}">
                                                {{$employee->employees->hiringManager}}</option>
                                            <option value="HR Manager">HR Manager</option>
                                            <option value="Executive Manager">Executive
                                                Manager</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-4 mt-2">
                            <button type="submit" class="btn btn-primary form-control">
                                Update Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Company Information card end -->

        <!-- Financial Information card start -->
        <div class="card tab-pane text-left fade" id="tab-financialInfo" role="tabpanel"
            aria-labelledby="financialInfo">
            <div class="card-header">
                {{ 'Financial Information' }}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('financialInfoUpdate.employee')}}" method="post">
                        @csrf
                        <table class="table table-bordered text-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <td style="width:30%;">Payscale Type</td>
                                    <td>
                                        <input type="hidden" name="id" value="{{ $employee->id }}">
                                        <select name="salaryType" class="form-select form-control" required>
                                            <option value="{{ $employee->financials->salaryType }}">
                                                {{ $employee->financials->salaryType }}</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Daily">Daily</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Payscale</td>
                                    <td>
                                        <select name="payScale" class="form-select form-control" required>
                                            <option value=" {{ $employee->financials->payScale }}">
                                                {{ $employee->financials->payScale }}</option>
                                            <option value="10000">10000</option>
                                            <option value="2400">2400</option>
                                            <option value="50">50</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Account Holder Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="accHolderName"
                                            value="{{ $employee->financials->accHolderName }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Account No</td>
                                    <td>
                                        <input class="form-control" type="text" name="accNumber"
                                            value="{{ $employee->financials->accNumber }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Bank Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="bankName"
                                            value="{{ $employee->financials->bankName }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Branch Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="branch"
                                            value="{{ $employee->financials->branch }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:30%;">Branch Code</td>
                                    <td>
                                        <input class="form-control" type="text" name="branchCode"
                                            value="{{ $employee->financials->branchCode }}">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="col-md-4 mt-2">
                            <button type="submit" class="btn btn-primary form-control">
                                Update Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Financial Information card end -->


    </div>
</div>
@endsection
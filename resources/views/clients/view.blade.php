@extends('layouts.header')
@section('title','View Profile')

@section('content')
<div class="row clearfix row-deck">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>
                {{$client->clients->firstName.' '.$client->clients->lastName}}
                </span>
               <span style="font-size:18px; font-weight:bold;">
               {{$client->userTypes->type}}
               </span>
            </div>
            <div class="card-body">
                <div id="clientPhoto" class="text-center">
                    <img src="{{asset('')}}{{$client->clients->photo}}" class="img-fluid" alt="User Image">
                </div>
                <h4 class="text-center mt-2">
                    @if(!empty($client->clients->departments))
                    {{$client->clients->departments->department}} <br>
                    <span style="font-size:16px;">
                    {{$client->clients->departments->designations->designation}}
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
                    <table class="table table-bordered text-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td style="width:30%;">First Name</td>
                                <td>{{$client->clients->firstName}}
                                </td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Last Name</td>
                                <td>{{$client->clients->lastName}}
                                </td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Fathers Name</td>
                                <td>{{$client->clients->fathersName}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Gender</td>
                                <td>{{$client->clients->gender}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Birth Date</td>
                                <td>{{$client->clients->dob}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Contact No</td>
                                <td>{{$client->clients->phone}}
                                </td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Present Address</td>
                                <td style="white-space: pre-line">
                                    {{$client->clients->presentAddress}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Permanent Address</td>
                                <td style="white-space: pre-line">
                                    {{$client->clients->permanentAddress}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Reference by</td>
                                <td>{{$client->clients->referenceName}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Reference Contact</td>
                                <td>{{$client->clients->referencePhone}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Identity Type</td>
                                <td>{{$client->clients->govId}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Identity No</td>
                                <td>{{$client->clients->govIdNo}}</td>
                            </tr>
                        </tbody>
                    </table>
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
                    <table class="table table-bordered text-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td style="width:30%;">Department</td>
                                <td>

                                    @if(!empty($client->clients->departments))
                                    {{$client->clients->departments->department}}
                                    @else
                                    {{'NA'}}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Designation</td>
                                <td>
                                    @if(!empty($client->clients->departments->designations))
                                    {{$client->clients->departments->designations->designation}}
                                    @else
                                    {{'NA'}}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Join Date</td>
                                <td>{{$client->clients->joinDate}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Leave Date</td>
                                <td>{{$client->clients->leaveDate}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Status</td>
                                <td>{{$client->clients->status}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Shift</td>
                                <td>{{$client->clients->shift}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Hiring Manager</td>
                                <td>{{$client->clients->hiringManager}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Company Information card end -->

        <!-- Financial Information card start -->
        <div class="card tab-pane text-left fade" id="tab-financialInfo" role="tabpanel"
            aria-labelledby="financialInfo">
            <div class="card-header">
                {{'Financial Information'}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td style="width:30%;">Payscale Type</td>
                                <td>{{$client->financials->salaryType}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Payscale</td>
                                <td>{{$client->financials->payScale}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Account Holder Name</td>
                                <td>{{$client->financials->accHolderName}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Account No</td>
                                <td>{{$client->financials->accNumber}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Bank Name</td>
                                <td>{{$client->financials->bankName}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Branch Name</td>
                                <td>{{$client->financials->branch}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;">Branch Code</td>
                                <td>{{$client->financials->branchCode}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Financial Information card end -->
</div>
@endsection
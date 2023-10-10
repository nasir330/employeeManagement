@extends('layouts.header')
@section('title','Manage Projects')

@section('content')
<div class="row clearfix row-deck">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-5 d-flex justify-content-start">
                    <h3 class="card-title">Manage Projects</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-start">
                    @if(session()->has('success'))
                    <div id="deleteMessage" class="alert-success">
                        <span style="color:green;">{{session('success')}}</span>
                    </div>
                    @endif
                    @if(session()->has('delete'))
                    <div id="deleteMessage" class="alert-danger">
                        <span style="color:red;">{{session('delete')}}</span>
                    </div>
                    @endif
                </div>

            </div>
            <div class="card-body">
                <!-- project selection form start -->
                <div class="d-flex justify-content-start mb-3">
                    <form action="{{route('employee.start.work')}}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label for="clientId" class="mb-0">Projects</label>
                                <div class="input-group mb-2">
                                    <input type="hidden" id="" name="clientId"
                                        value="{{ !empty($clientId->projects) ? $clientId->projects->clientId : '' }}" />
                                    <select name="projectId" class="form-select form-control" required>
                                        <option value="">--Select Project--</option>
                                        @foreach($projects as $key=> $project)
                                        <option value="{{$project->id}}">
                                            {{$project->projects->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-primary">Start</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- project selection form end -->
                <!-- on-progress work table start -->
                <div class="col-md-12">
                    <table class="table table-hover table-striped text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Client Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $workProgress)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$workProgress->projects->title}}</td>
                                <td>{{$workProgress->clients->nickName}}</td>
                                <td>{{\Carbon\Carbon::parse($workProgress->start_time)->format('H:i:s')}}</td>
                                <td>{{\Carbon\Carbon::parse($workProgress->end_time)->format('H:i:s')}}</td>
                                <td>
                                    <div class="card-options d-flex justify-content-start">
                                        <div class="dropend">
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="z-index: 9999;">
                                                <li class="dropdown-item">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#workBreakModal">                                                       
                                                        <i class="dropdown-icon fa-solid fa-pause"></i>
                                                        Break
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="">
                                                    <i class="dropdown-icon fa-solid fa-stop"></i>                                                       
                                                        End
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- on-progress work table end -->

            </div>
        </div>
    </div>

</div>
@include('templates.modal.workBreak')
@endsection
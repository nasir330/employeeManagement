@extends('layouts.header')
@section('title','Assign Employee')

@section('content')
<div class="row clearfix row-deck">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-5 d-flex justify-content-start">
                    <h3 class="card-title">Assign Employee to Projects</h3>
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
                <div class="d-flex justify-content-start mb-3">
                    <form action="{{route('employee.assign')}}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                                <label for="projectId" class="mb-0">Projects</label>
                                <div class="input-group mb-2">
                                    <select name="projectId" class="form-select form-control" required>
                                        <option value="">--Select Project--</option>
                                        @foreach($projects as $key=> $project)
                                        <option value="{{$project->id}}">
                                            {{$project->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="employeeId" class="mb-0">Employees</label>
                                <div class="input-group mb-2">
                                    <select name="employeeId" class="form-select form-control" required>
                                        <option value="">--Select Employee--</option>
                                        @foreach($employees as $key=> $employee)
                                        <option value="{{$employee->id}}">
                                            {{$employee->employees->nickName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive col-md-6">
                    <table class="table table-hover table-striped text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Id</th>
                                <th>Project Title</th>
                                <th>Client</th>
                                <th>Employee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($activeProject as $key=> $project)
                           <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$project->projects->projectId}}</td>
                            <td>{{$project->projects->title}}</td>
                            <td>{{$project->projects->clients->nickName}}</td>
                            <td>{{$project->employees->nickName}}</td>
                            <td>
                                    <div class="card-options d-flex justify-content-start">
                                        <div class="dropend">
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="{{route('edit.designations',['id'=>$project->id])}}">
                                                        <i class="dropdown-icon fa fa-edit"></i>
                                                        edit
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <i class="dropdown-icon fa fa-trash"></i>
                                                        Delete
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
            </div>
        </div>
    </div>

</div>
@endsection
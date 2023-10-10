@extends('layouts.header')
@section('title','Employee List')

@section('content')


<!-- sales overview start -->
<div class="row clearfix row-deck">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-5 d-flex justify-content-start">
                    <h3 class="card-title">Employees List</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-start">
                    @if(session()->has('delete'))
                    <div id="deleteMessage" class="alert-danger">
                        <span style="color:red;">{{session('delete')}}</span>
                    </div>
                    @endif
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Shift</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->employees->firstName.' '.$user->employees->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->userTypes->type}}</td>
                                <td>
                                    @if(!empty($user->employees->departments))
                                    {{$user->employees->departments->department}}
                                    @else
                                    {{'NA'}}
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($user->employees->departments->designations))
                                    {{$user->employees->departments->designations->designation}}
                                    @else
                                    {{'NA'}}
                                    @endif
                                </td>
                                <td>{{$user->employees->shift}}</td>
                                <td>{{$user->employees->status}}</td>
                                <td>
                                    <div class="card-options d-flex justify-content-start">
                                        <div class="dropend">
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="{{route('view.employee',['id'=>$user->id])}}">
                                                        <i class="dropdown-icon fa fa-eye"></i>
                                                        View Details
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="{{route('edit.employee',['id'=>$user->id])}}">
                                                        <i class="dropdown-icon fa fa-edit"></i>
                                                        edit
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="{{route('delete.employee',['id'=>$user->id])}}">
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
<!-- sales overview end -->
@endsection
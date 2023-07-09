@extends('layouts.header')
@section('title','Departments List')

@section('content')
<div class="row clearfix row-deck">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-5 d-flex justify-content-start">
                    <h3 class="card-title">Departments List</h3>
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
                <div class="col-md-6 d-flex justify-content-start mb-3">
                    <form action="{{route('add.departments')}}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="departments" class="col-form-label">Department Name</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="department" class="form-control"
                                    placeholder="Enter a Department name" required>
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
                                <th>Id</th>
                                <th>Department Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$data->department}}</td>
                                <td>
                                    <div class="card-options d-flex justify-content-start">
                                        <div class="dropend">
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="{{route('edit.departments',['id'=>$data->id])}}">
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
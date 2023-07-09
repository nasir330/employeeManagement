<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('pages.departments.index',['departments' => $departments]);
    }
    //add department
    public function store(Request $request)
    {
        $data = $request->all();
        Department::create($data);
        session()->flash('success','Department successfully created !!');
        return redirect()->back();
    }
    //edit department
    public function edit($id)
    {
        $department = Department::where('id',$id)->first();
        return view('pages.departments.edit',['department' => $department]);
    }
    //update department
    public function update(Request $request)
    {        
        Department::where('id',$request->departmentId)->update([
            'department'=>$request->department,
        ]);
        session()->flash('success','Department successfully updated !!');
        return redirect()->route('departments');
    }
}

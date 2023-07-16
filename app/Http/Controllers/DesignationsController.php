<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;

class DesignationsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $designations = Designation::all();
        return view('pages.designations.index',['designations' => $designations, 'departments' => $departments]);
    }
    //add department
    public function store(Request $request)
    {
        $data = $request->all();
        Designation::create($data);
        session()->flash('success','Designation successfully created !!');
        return redirect()->back();
    }
    //edit department
    public function edit($id)
    {
        $designation = Designation::find($id);
        return view('pages.designations.edit',['designation' => $designation]);
    }
    //update department
    public function update(Request $request)
    {              
        Designation::where('id',$request->designationtId)->update([
            'designation'=>$request->designation,
        ]);
        session()->flash('success','Designations successfully updated !!');
        return redirect()->route('designations');
    }

    //==========ajax requests===========

   
    //fetch all designation by id
    public function fetchDesignation($id)
    {
        $designations = Designation::where('departmentId',$id)->get();
        return response()->json($designations);
    }
}

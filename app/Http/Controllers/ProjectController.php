<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\ProjectManage;

class ProjectController extends Controller
{
    public function index()
    {
        $clients = User::where('userType',4)->get();
        $projects = Project::all();
        return view('superAdmin.projects.index',['clients'=>$clients, 'projects'=>$projects]);
    }
    //create project
    public function store(Request $request)
    {        
        $projectId = mt_rand(1000, 9999);
        $clients = Project::create([
            'projectId'=> $projectId,
            'clientId'=> $request->clientId,
            'title'=> $request->title,
        ]);
        session()->flash('success', 'Project created successfully');
        return redirect()->back();
    }
    //assing employee form
    public function assignEmployee()
    {
        $employees = User::where('userType',3)->get();
        $projects = Project::all();
        $activeProject = ProjectManage::all();
        return view('pages.projects.assignEmployee',['employees'=>$employees, 'projects'=>$projects, 'activeProject'=>$activeProject]); 
    }
    //employee assign into project
    public function storeAssignEmployee(Request $request)
    {
        
        ProjectManage::create([
            'projectId' => $request->projectId,
            'employeeId' => $request->employeeId,
        ]);
        session()->flash('success', 'Employee assigned into project');
        return redirect()->back();
    }
}
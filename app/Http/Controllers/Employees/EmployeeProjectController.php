<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectManage;
use App\Models\User;
use App\Models\WorkLog;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeProjectController extends Controller
{
    public function index()
    {
        $clientId = ProjectManage::where('employeeId',Auth::user()->id)->first();
        $projects = ProjectManage::where('employeeId',Auth::user()->id)->get();
        $data = WorkLog::where('employeeId',Auth::user()->id)->get();
        return view('employees.projects.index',['clientId'=>$clientId, 'projects'=>$projects, 'data'=>$data]);
    }

    public function workLogs(Request $request){
        $employeeId = Auth::user()->id;
        $startTime = Carbon::now()->setTimezone('Asia/Dhaka');
        WorkLog::create([
            'employeeId' => $employeeId,
            'clientId' => $request->clientId,
            'projectId' => $request->projectId,
            'start_time' => $startTime,
        ]);

        // Flash a success message and redirect back
        session()->flash('success', 'Project Successfully started..!!');
        return redirect()->back();
    }
    // submit work break 
    public function workBreak(Request $request){
       return $request->all();
    }
}
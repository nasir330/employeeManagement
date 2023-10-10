<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employees;
use App\Models\Financial;
use App\Models\UserType;
use App\Models\Department;
use App\Models\Designation;
use App\Exports\UsersExport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Excel;

class userController extends Controller
{
 
   
   public function setProfileEmployee()
   {
      $userTypes = UserType::whereNot('id',1)->get();
      $departments = Department::all();    
      $designations = Designation::all();

   return view('pages.employees.setProfile',['userTypes'=>$userTypes, 'departments'=>$departments, 'designations'=>$designations]);
   }
   public function setProfileDataEmployee(Request $request)
   {      

      // return $request->all();
      // dd($request->all());
         // Save the user's photo
         $photo = $request->file('photo');
         $photo_name = $photo->getClientOriginalName();
         $photo_storage = $photo->storeAs("public/uploads", $photo_name);
         $photo_path = 'storage/uploads/'.$photo_name;
         // update employee data
         Employees::where('userId',$request->profileId)->update([                  
            'fathersName' => $request->fathersName,          
            'gender' => $request->gender,          
            'dob' => $request->dob,   
            'phone2' => $request->phone2,          
            'referenceName' => $request->referenceName,          
            'referencePhone' => $request->referencePhone,          
            'govId' => $request->govId,          
            'govIdNo' => $request->govIdNo,          

            'address1' => $request->address1,          
            'townCity1' => $request->townCity1,  
            'postZipCode1' => $request->postZipCode1,  
            'state1' => $request->state1,  
            'country1' => $request->country1,  

            'address2' => $request->address2,          
            'townCity2' => $request->townCity2,  
            'postZipCode2' => $request->postZipCode2,  
            'state2' => $request->state2,  
            'country2' => $request->country2,  

            'department' => $request->department,         
            'designation' => $request->designation,         
            'joinDate' => $request->joinDate,         
            'leaveDate' => $request->leaveDate,         
            'status' => $request->status,         
            'shift' => $request->shift,         
            'hiringManager' => $request->hiringManager,           
            'photo' => $photo_path,          
         ]);
         
         Financial::where('userId',$request->profileId)->update([
            'salaryType' => $request->salaryType,
            'payScale' => $request->payScale,
            'bankName' => $request->bankName,
            'accHolderName' => $request->accHolderName,
            'accNumber' => $request->accNumber,
            'bankSortCode' => $request->bankSortCode,
            'bankRoutingCode' => $request->bankRoutingCode,
            'swiftCode' => $request->swiftCode,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'townCity' => $request->townCity,
            'stateProvision' => $request->stateProvision,
            'country' => $request->country,            
         ]); 
         
         // Flash a success message and redirect back
         session()->flash('success', 'Profile data updated successfully..!!');
         return redirect()->route('dashboard');   
   }
    public function employeeList()
    {
      $users = User::where('userType', 3)->get();
      return view('superAdmin.employees.index',['users' => $users]);
    }  
     //add employee form
     public function createEmployee()
     {    
         $userTypes = UserType::whereNot('id',1)->paginate(10);
         $departments = Department::all();    
         $designations = Designation::all();    
         return view('superAdmin.employees.create',['userTypes'=> $userTypes, 'departments'=> $departments, 'designations'=> $designations]);
     }
     //store employee data
     public function storeEmployee(Request $request)
     {    
        // Generate a random password
        $autoPassword = Str::random(8);

        // Save the user's photo
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;

        // store  user data
        $user = User::create([
            'userType' => $request->userType,
            'email' => $request->email,          
            'password' => Hash::make($autoPassword),           
        ]);

        // store employee data
        $employee = Employees::create([
            'userId' => $user->id,
            'firstName' => $request->firstName,          
            'lastName' => $request->lastName,          
            'nickName' => $request->nickName,          
            'fathersName' => $request->fathersName,          
            'gender' => $request->gender,          
            'presentAddress' => $request->presentAddress,          
            'permanentAddress' => $request->permanentAddress,          
            'dob' => $request->dob,          
            'phone' => $request->phone,          
            'referenceName' => $request->referenceName,          
            'referencePhone' => $request->referencePhone,          
            'govId' => $request->govId,          
            'govIdNo' => $request->govIdNo,          
            'photo' => $photo_path,          
            'department' => $request->department,         
            'designation' => $request->designation,         
            'joinDate' => $request->joinDate,         
            'leaveDate' => $request->leaveDate,         
            'status' => $request->status,         
            'shift' => $request->shift,         
            'hiringManager' => $request->hiringManager,
        ]);

        // store financial data
        $financial = Financial::create([
            'userId' => $user->id,
            'salaryType' => $request->salaryType,          
            'payScale' => $request->payScale,          
            'accHolderName' => $request->accHolderName,          
            'accNumber' => $request->accNumber,          
            'bankName' => $request->bankName,          
            'branch' => $request->branch,          
            'branchCode' => $request->branchCode,
        ]);

         // Send the login details to the user's email
         Mail::send('notification.newuser', ['user' => $user, 'password' => $autoPassword], function($message) use ($user) {
            $message->to($user->email)->subject('Your account has been created successfully');
        });
        
        // Flash a success message and redirect back
        session()->flash('success', 'Employee created successfully..!!');
        return redirect()->back();           
       
     }
     //view employees profile
     public function viewEmployee($id)
     {
        $employee = User::find($id);
        return view('superAdmin.employees.view',['employee' => $employee]);
     }
     //edit employees profile
     public function editEmployee($id)
     {
        $employee = User::find($id);
        $departments = Department::all();    
        $designations = Designation::all();          
        return view('superAdmin.employees.edit',['employee' => $employee, 'departments'=> $departments, 'designations'=> $designations]);
     }
     //delete employees profile
     public function deleteEmployee($id)
     {       
        User::destroy($id);
        Employees::destroy($id);
        Financial::destroy($id);
        session()->flash('delete','Account Deleted ..!!');
        return redirect()->back();
     }
     //employees photoUpdate
     public function photoUpdateEmployee(Request $request)
     {      
        $url = "storage/";
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();      
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;

        Employees::where('userId',$request->userId)->update([
            'photo'=> $photo_path,
         ]);
         session()->flash('success','Photo updated successfully..!!');
        return redirect()->back();
     }
     //employees infoUpdate
     public function infoUpdateEmployee(Request $request)
     {
        Employees::where('userId',$request->id)->update([
            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'fathersName'=> $request->fathersName,
            'gender'=> $request->gender,
            'dob'=> $request->dob,
            'phone'=> $request->phone,
            'presentAddress'=> $request->presentAddress,
            'permanentAddress'=> $request->permanentAddress,
            'referenceName'=> $request->referenceName,
            'referencePhone'=> $request->referencePhone,
            'govId'=> $request->govId,
            'govIdNo'=> $request->govIdNo,
         ]);
         session()->flash('success','Employee Info updated successfully..!!');
        return redirect()->back();
     }
     //employees companyInfoUpdate
     public function companyInfoUpdateEmployee(Request $request)
     {       
        Employees::where('userId',$request->id)->update([
            'department'=> $request->department,
            'designation'=> $request->designation,
            'joinDate'=> $request->joinDate,
            'leaveDate'=> $request->leaveDate,
            'status'=> $request->status,
            'shift'=> $request->shift,
            'hiringManager'=> $request->hiringManager,
         ]);
         session()->flash('success','Company Info updated successfully..!!');
        return redirect()->back();
     }
     //employees financialInfoUpdate
     public function financialInfoUpdateEmployee(Request $request)
     {            
        Financial::where('userId',$request->id)->update([
            'salaryType'=> $request->salaryType,
            'payScale'=> $request->payScale,
            'accHolderName'=> $request->accHolderName,
            'accNumber'=> $request->accNumber,
            'bankName'=> $request->bankName,
            'branch'=> $request->branch,
            'branchCode'=> $request->branchCode,
         ]);
         session()->flash('success','Financial Info updated successfully..!!');
        return redirect()->back();
     }
    public function exportUser()
    {
      return Excel::download(new UsersExport, 'users.xls');
    }

    // Client section starts here
    public function clientList()
    {
      $users = User::where('userType', 4)->get();
      return view('superAdmin.clients.index',['users' => $users]);
    }  
    //view clients profile
    public function viewClient($id)
    {
       $client = User::find($id);
       return view('superAdmin.clients.view',['client' => $client]);
    }
    public function setProfileClient()
    {
       $userTypes = UserType::whereNot('id',1)->get();
       $departments = Department::all();    
       $designations = Designation::all();
 
    return view('pages.clients.setProfile',['userTypes'=>$userTypes, 'departments'=>$departments, 'designations'=>$designations]);
    }
    public function setProfileDataClient(Request $request)
    {      
 
       // return $request->all();
          // Save the user's photo
          $photo = $request->file('photo');
          $photo_name = $photo->getClientOriginalName();
          $photo_storage = $photo->storeAs("public/uploads", $photo_name);
          $photo_path = 'storage/uploads/'.$photo_name;
 
          // update client data
          Clients::where('userId',$request->profileId)->update([                  
             'fathersName' => $request->fathersName,          
             'gender' => $request->gender,          
             'dob' => $request->dob,   
             'phone2' => $request->phone2,          
             'referenceName' => $request->referenceName,          
             'referencePhone' => $request->referencePhone,          
             'govId' => $request->govId,          
             'govIdNo' => $request->govIdNo,          
             'address1' => $request->address1,          
             'townCity1' => $request->townCity1,  
             'postZipCode1' => $request->postZipCode1,  
             'state1' => $request->state1,  
             'country1' => $request->country1,  
             'address2' => $request->address2,          
             'townCity2' => $request->townCity2,  
             'postZipCode2' => $request->postZipCode2,  
             'state2' => $request->state2,  
             'country2' => $request->country2,  
             'joinDate' => $request->joinDate,         
             'leaveDate' => $request->leaveDate,         
             'status' => $request->status,         
             'photo' => $photo_path,          
          ]);
          
          Financial::where('userId',$request->profileId)->update([
             'salaryType' => $request->salaryType,
             'payScale' => $request->payScale,
             'bankName' => $request->bankName,
             'accHolderName' => $request->accHolderName,
             'accNumber' => $request->accNumber,
             'bankSortCode' => $request->bankSortCode,
             'bankRoutingCode' => $request->bankRoutingCode,
             'swiftCode' => $request->swiftCode,
             'address1' => $request->address1,
             'address2' => $request->address2,
             'townCity' => $request->townCity,
             'stateProvision' => $request->stateProvision,
             'country' => $request->country,            
          ]); 
          
          // Flash a success message and redirect back
          session()->flash('success', 'Profile data updated successfully..!!');
          return redirect()->route('dashboard');   
    }
    
    //add client form
    public function createClient()
    {    
        $userTypes = UserType::whereNot('id',1)->paginate(10);
        $departments = Department::all();    
        $designations = Designation::all();    
        return view('superAdmin.clients.create',['userTypes'=> $userTypes, 'departments'=> $departments, 'designations'=> $designations]);
    }

    public function editClient($id)
     {
        $client = User::find($id);
        $departments = Department::all();    
        $designations = Designation::all();          
        return view('superAdmin.clients.edit',['client' => $client, 'departments'=> $departments, 'designations'=> $designations]);
     }

     //delete clients profile
     public function deleteClient($id)
     {       
        User::destroy($id);
        Clients::destroy($id);
        Financial::destroy($id);
        session()->flash('delete','Account Deleted ..!!');
        return redirect()->back();
     }

     //clients photoUpdate
     public function photoUpdateClient(Request $request)
     {      
        $url = "storage/";
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();      
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;

        Clients::where('userId',$request->userId)->update([
            'photo'=> $photo_path,
         ]);
         session()->flash('success','Photo updated successfully..!!');
        return redirect()->back();
     }
     //Clients infoUpdate
     public function infoUpdateClient(Request $request)
     {
        Clients::where('userId',$request->id)->update([
            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'fathersName'=> $request->fathersName,
            'gender'=> $request->gender,
            'dob'=> $request->dob,
            'phone'=> $request->phone,
            'presentAddress'=> $request->presentAddress,
            'permanentAddress'=> $request->permanentAddress,
            'referenceName'=> $request->referenceName,
            'referencePhone'=> $request->referencePhone,
            'govId'=> $request->govId,
            'govIdNo'=> $request->govIdNo,
         ]);
         session()->flash('success','Client Info updated successfully..!!');
        return redirect()->back();
     }
     //Clients companyInfoUpdate
     public function companyInfoUpdateClient(Request $request)
     {       
        Clients::where('userId',$request->id)->update([
            'department'=> $request->department,
            'designation'=> $request->designation,
            'joinDate'=> $request->joinDate,
            'leaveDate'=> $request->leaveDate,
            'status'=> $request->status,
            'shift'=> $request->shift,
            'hiringManager'=> $request->hiringManager,
         ]);
         session()->flash('success','Company Info updated successfully..!!');
        return redirect()->back();
     }
     //Clients financialInfoUpdate
     public function financialInfoUpdateClient(Request $request)
     {            
        Financial::where('userId',$request->id)->update([
            'salaryType'=> $request->salaryType,
            'payScale'=> $request->payScale,
            'accHolderName'=> $request->accHolderName,
            'accNumber'=> $request->accNumber,
            'bankName'=> $request->bankName,
            'branch'=> $request->branch,
            'branchCode'=> $request->branchCode,
         ]);
         session()->flash('success','Financial Info updated successfully..!!');
        return redirect()->back();
     }
}
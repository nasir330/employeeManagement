<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Employees;
use App\Models\Financial;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }    
    public function sendLink()
    {
      $departments = Department::all();    
    //   $designations = Designation::all();
      $userTypes = UserType::whereNot('id',1)
      ->where('id',4)->first();
      return view('superAdmin.clients.sendLink',['userTypes'=> $userTypes, 'departments'=> $departments]);
    }

    public function sendLinkStore(Request $request)
   {
    //  return $request->all();
     // Generate a random password
     $autoPassword = Str::random(8);     

     // store  user data
     $user = User::create([
         'userType' => $request->userType,
         'email' => $request->email,          
         'password' => Hash::make($autoPassword),           
     ]);
       
        $phoneNumber = $request->countryCode.$request->phone;
        
     // store client data
     $client = Clients::create([
         'userId' => $user->id,
         'firstName' => $request->firstName,          
         'lastName' => $request->lastName,          
         'nickName' => $request->nickName,
         'phone1' => $phoneNumber,
         'whatsappNo' => $request->whatsappNumber,
     ]);

     // store financial data
     $financial = Financial::create([
         'userId' => $user->id,          
     ]);

      // Send the login details to the user's email
      Mail::send('notification.clientInvitation', ['user' => $user, 'password' => $autoPassword], function($message) use ($user) {
         $message->to($user->email)->subject('Your account has been created successfully');
     });
     
     // Flash a success message and redirect back
     session()->flash('success', 'Link Send to the Email successfully..!!');
     return redirect()->back();    
     
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
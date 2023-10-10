<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Clients;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Employees;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
              
        $user = $request->user();

        if($user->userType == 1){
            return redirect()->intended(RouteServiceProvider::HOME);
        }elseif($user->userType == 3){
            // Check if the user has an entry in the employee table
          $employee = Employees::where('userId', $user->id)->first();
          if (empty($employee->gender)) {
              return redirect()->intended(RouteServiceProvider::SETPROFILEEMPLOYEE);
              // User has an entry in the employee table
              // You can perform additional actions here if needed
          } else {
              return redirect()->intended(RouteServiceProvider::EMPLOYEEHOME);
              // User does not have an entry in the employee table
              // You can handle this case according to your requirements
          }
        }else{
            // Check if the user has an entry in the client table
          $client = Clients::where('userId', $user->id)->first();
          if (empty($client->gender)) {
              return redirect()->intended(RouteServiceProvider::SETPROFILECLIENT);
              // User has an entry in the client table
              // You can perform additional actions here if needed
          } else {
              return redirect()->intended(RouteServiceProvider::CLIENTHOME);
              // User does not have an entry in the client table
              // You can handle this case according to your requirements
          }
        }

       
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
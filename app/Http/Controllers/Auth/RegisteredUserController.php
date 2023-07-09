<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\HtmlString;
use App\Models\Employees;
use App\Models\Financial;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        if (\App\Models\User::count() > 0) {
            $errorMessage = 'You are not authorized for this action..!!<br/>' .
                            'Please <a href="https://www.facebook.com/md.nasirul.5" target="_blank">contact </a>'.'support';
            session()->flash('error', new HtmlString($errorMessage));           
        }      
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if (\App\Models\User::count() > 0) {
            $errorMessage = 'You are not authorized for this action..!!<br/>' .
                            'Please <a href="https://www.facebook.com/md.nasirul.5" target="_blank">contact </a>'.'support';
            session()->flash('error', new HtmlString($errorMessage));
            return redirect()->route('login');
        }       
        $request->validate([            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([            
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        Employees::create([            
            'userId' => $user->id,
            'firstName' => 'Super',
            'lastName' => 'Admin',
        ]);
        Financial::create([            
            'userId' => $user->id,           
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

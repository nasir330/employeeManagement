<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $data =CompanyProfile::first();               
        return view('pages.companyProfile.index',['data'=>$data]);
    }
    //store Company Details
    public function storeCompanyDetails(Request $request)
    {
        //store company details data       
        CompanyProfile::create([            
            'companyName' => $request->companyName,          
            'phone' => $request->phone,          
            'email' => $request->email,          
            'website' => $request->website,          
            'address' => $request->address,          
            'city' => $request->city,          
            'state' => $request->state,
            'zip' => $request->zip,
        ]);
         // Flash a success message and redirect back
         session()->flash('success', 'Company Info Updated ..!!');
         return redirect()->back();
    }
    //store Company Logo Header Footer
    public function storeLogoHeaderFooter(Request $request)
    {
        // Save the logo
        $logo = $request->file('logo');
        $logo_name = $logo->getClientOriginalName();
        $logo_storage = $logo->storeAs("public/logos", $logo_name);
        $logo_path = 'storage/logos/'.$logo_name; 

        //store company Logo Header Footer data  
        CompanyProfile::where('id',1)->update([            
            'logo' => $logo_path,          
            'headerTitle' => $request->headerTitle,          
            'footer' => $request->footer,
        ]);
         // Flash a success message and redirect back
         session()->flash('success', 'Logo and Header/Footer Updated ..!!');
         return redirect()->back();
    }
    //store Company Payment Account
    public function storePaymentAccount(Request $request)
    {
         //store Company Payment Account data         
        CompanyProfile::where('id',1)->update([
            'currency' => $request->currency,          
            'walletName' => $request->walletName,
            'walletAccount' => $request->walletAccount,
        ]);
         // Flash a success message and redirect back
         session()->flash('success', 'Payment Account Updated ..!!');
         return redirect()->back();
    }
}

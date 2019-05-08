<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AdminLoginController extends Controller
{

    public function __construct(){

        $this->middleware('guest:admin');
    }

    public function showLoginForm(){

        return view('auth.admin-login');
    }

    public function login(Request $request){

        //validate the data 
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        //attempt to log user
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
             //if successful redirect to the intended location

           return redirect()->intended(route('admin.dashboard'));
        }
        //if not redirect to login with the form data

        return redirect()->back()->withInput($request->only('email','remember'));//back to the previous page

    }
}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //Validate the Form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //attempt the log user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password] , $request->remember))
        {
            //if success, then Redirect  to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessful, then redirect back to the login form with the form data
        return redirect()->back()->with($request->only('email','remember'));
    }

}

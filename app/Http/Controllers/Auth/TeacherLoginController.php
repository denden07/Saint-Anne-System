<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TeacherLoginController extends Controller
{
    //
    protected $guard = 'teacher';

    use AuthenticatesUsers {
        logout as performLogout;
    }


    public function __construct()
    {

        $this->middleware('guest:teacher');
    }

    public function showLoginForm()
    {

        return view('layouts.login-teacher');
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return view('layouts.login-teacher');
    }

    public function login(Request $request)
    {


        //Validate the form data-
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required'
        ]);

        //Attempt to log the user in -
        if(Auth::guard('teacher')->attempt(['username'=>$request->username,'password'=>$request->password],$request->remember))
         {
             return redirect()->intended(route('teacher.dashboard'));
        }


        //If successful, redirect to their location

        return redirect()->back()->withInput($request->only('username','remember'));
        //If unsuccessful, redirect to login


    }

}

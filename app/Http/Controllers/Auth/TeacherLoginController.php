<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TeacherLoginController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('guest:teacher');
    }

    public function showLoginForm()
    {

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

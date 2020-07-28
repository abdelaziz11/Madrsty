<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions

        $this->middleware(['guest:student', 'guest:teacher', 'guest'])->only(['login_form', 'login']);
    }

    
    public function login_form()
    {
        //this function will return the login form and i will pass a variable
        //called url with value = student to go to the student login url
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //this function will log the user in
        $credentials = request(['phone_number', 'password']);

        if(Auth::guard('student')->attempt($credentials))
        {
            return redirect()->route('students.home');
        }
        else if (Auth::guard('teacher')->attempt($credentials))
        {
            return redirect()->route('teachers.home');
        }

        else
        {
            return back()->withErrors(['email'=>'Invalid Attempt! Check Credentials']);
        }

    }

    public function logout()
    {
        //the logout function
        Auth::logout();
    }

}

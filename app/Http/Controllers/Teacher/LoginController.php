<?php

namespace App\Http\Controllers\Teacher;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions
        
        $this->middleware(['guest:teacher', 'guest:student', 'guest'])->only(['login_form']);
        $this->middleware('auth:teacher')->only('logout');
    }

    
    public function login_form()
    {
        //this function will return the login form and i will pass a variable
        //called url with value = teacher to go to the teacher login url
        // dd('a');
        return view('auth.login')->with('url', 'teacher');
    }

    public function login(Request $request)
    {
        //this function will log the user in

        $credentials = request(['phone_number', 'password']);

        if(Auth::guard('teacher')->attempt($credentials))
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
        
        Auth::guard('teacher')->logout();
    }

    public function home()
    {
        return view('teacher.home');
    }
}

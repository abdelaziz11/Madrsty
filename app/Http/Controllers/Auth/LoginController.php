<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function show()
    {
      return view('auth.login');
    }


         public function login(Request $request)
    {
            $credentials = ['email'=>$request->email,'password'=>$request->password];

      if(Auth::guard('student')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('students.home');
        }
        else if (Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('teachers.profile');
        }
        else
        {
            dd('error');
            return back()->withErrors(['email'=>'Invalid Attempt! Check Credentials']);
        }


    }  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

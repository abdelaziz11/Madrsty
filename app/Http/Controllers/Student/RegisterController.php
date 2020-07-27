<?php

namespace App\Http\Controllers\Student;

use Hash;
use App\Model\Grade;
use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Student\CreateStudentRequest;

class RegisterController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions
        
        $this->middleware('guest:student')->except('home');
        $this->middleware('guest:teacher')->except('home');
        $this->middleware('authAdmin')->except('home');
    }


    public function register_form()
    {
        //this will get all the grades from the db and go to the student register page
        $grades = Grade::all();
        return view('students.register', compact('grades'));
    }

    public function register(CreateStudentRequest $request)
    {
        //this function will validate the inputs then insert a new student
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->grade_id = $request->grade_id;
        $student->save();

        return redirect()->route('students.index');
    }
}

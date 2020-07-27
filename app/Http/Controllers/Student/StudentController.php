<?php

namespace App\Http\Controllers\Student;

use Auth;
use Hash;
use Session;
use App\Model\Grade;
use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions

        $this->middleware('auth:student')->only('home');
        $this->middleware('authAdmin')->only(['index', 'show']);
    }

    public function home()
    {
        return view('students.home');
    }

    public function index()
    {
        //this function will return all the users and show them in the blade
        
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function show(Student $student)
    {
        //this function will get all the subjects belongs to a specific user based on his grade

        $student_subjects = $student->grade->subjects()->get();
        return view('students.show', compact('student', 'student_subjects'));
    }

    public function edit(Student $student)
    {
        //this function will get all the subjects belongs to a specific user based on his grade
        $grades = Grade::all();
        return view('students.edit', compact('student', 'grades'));
    }

    public function update(Request $request, Student $student)
    {
        //this function will get all the subjects belongs to a specific user based on his grade
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'grade_id' => $request->grade_id,
        ]);

        Session::flash('success', 'Student Updated Successfully!');
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        //this function will delete a student
        $student->delete();
        Session::flash('success', 'Student Deleted Successfully!');
        return redirect()->route('students.index');
    }
}

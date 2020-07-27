<?php

namespace App\Http\Controllers\Teacher;

use Hash;
use App\Model\Grade;
use App\Model\Subject;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\CreateTeacherRequest;

class RegisterController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions

        $this->middleware('guest:student');
        $this->middleware('guest:teacher');
        $this->middleware('authAdmin');
    }


    public function register_form()
    {
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('teachers.register', compact('grades', 'subjects'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:teachers',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->subject_id = $request->subject_id;
        $teacher->save();

        $teacher->grades()->sync($request->grade_id);
        
        return redirect()->route('teachers.index');
    }
}

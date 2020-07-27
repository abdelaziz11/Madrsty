<?php

namespace App\Http\Controllers\Teacher;

use Hash;
use Session;
use App\Model\Grade;
use App\Model\Teacher;
use App\Model\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{

    public function __construct()
    {
        //some middlewares for user type permissions

        $this->middleware('auth:teacher')->only('home');
        $this->middleware('authAdmin')->only(['index', 'show']);
    }

    
    public function home()
    {
        return view('teachers.home');
    }


    public function index()
    {
        //this function will show all the teachers
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {
        //this function will show a specific teacher with his grades
        $teacher_grades = $teacher->grades()->get();
        return view('teachers.show', compact('teacher', 'teacher_grades'));
    }

    public function edit(Teacher $teacher)
    {

        //this function will show the teacher edit page
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('teachers.edit', compact('teacher', 'grades', 'subjects'));
    }

    public function update(Request $request, Teacher $teacher)
    {

        //this function will update a teacher
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'subject_id' => $request->subject_id,
        ]);

        $teacher->grades()->sync($request->grade_id);

        Session::flash('success', 'Teacher Updated Successfully');
        return redirect()->route('teachers.index');
    }

    public function destroy(Teacher $teacher)
    {
        //this function will delete a specific teacher
        $teacher->delete();
        Session::flash('success', 'Teacher Deleted Successfully');
        return redirect()->route('teachers.index');
    }
}

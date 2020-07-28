<?php

namespace App\Http\Controllers\Teacher;

use App\Model\Course;
use App\Model\Lecture;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher')->except([]);
    }

    public function profile()
    {
        $id = Auth::User()->id;
        // get authenticated teacher data
        $teacher = Teacher::find($id);
        // get teacher's courses data
        $courses = $teacher->courses()->get();
        // get total of students assigned with this teacher
        $courses_id = $teacher->courses()->select('id')->get();
        $totalStudents = DB::table('courses_students')->select(DB::raw('COUNT(*) as totalStudents'))->whereIn('course_id',$courses_id)->get();
        //---------------------------
        dd($totalStudents);
    }

    public function teacher_courses(Teacher $teacher)
    {
        $teacher_courses = $teacher->courses;
        return view('Teachers.courses', compact('teacher_courses'));
    }

    public function teacher_course_lectures(Teacher $teacher, Course $course)
    {
        $course_lectures = $course->lectures;
        return view('Teachers.course_lectures', compact('teacher', 'course', 'course_lectures'));
    }

    public function home()
    {
        return view('Teachers.home');
    }

}

<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Teacher;
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

}

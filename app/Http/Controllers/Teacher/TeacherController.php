<?php

namespace App\Http\Controllers\Teacher;

use Carbon\Carbon;
use App\Model\Course;
use App\Model\Lecture;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Lectures\CreateLectureRequest;



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
        $teacher_courses = Auth::User()->courses;
        return view('Teachers.courses', compact('teacher', 'teacher_courses'));
    }

    public function teacher_course_lectures(Teacher $teacher, Course $course)
    {
        
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SUNDAY));
        $end = date($now->endOfWeek(Carbon::THURSDAY));
        $course = Course::where('teacher_id', Auth::id())
        ->where('id', $course->id)->first();
        $course_lectures = $course->lectures->whereBetween('lecture_date', [$start, $end]);
        return view('Teachers.course_lectures', compact('teacher', 'course', 'course_lectures'));

    }

    public function add_new_lecture(CreateLectureRequest $request, Teacher $teacher, Course $course)
    {
        $lecture = new Lecture();
        $lecture->name = $request->name;
        $lecture->lecture_date = $request->lecture_date;
        $lecture->course_id = $course->id;
        $lecture->save();

        return redirect()->route('teacher.course.lectures', [$course->teacher->id, $course->id]);
    }

    public function get_course_questions(Teacher $teacher, Course $course)
    {
        $course_questions = $course->questions;
        return view('Teachers.course_questions', compact('course', 'course_questions'));
    }

    public function home()
    {
        return view('Teachers.home');
    }

    

}

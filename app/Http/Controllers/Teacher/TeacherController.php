<?php

namespace App\Http\Controllers\Teacher;

use App\Model\Course;
use App\Model\Lecture;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
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

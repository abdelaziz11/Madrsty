<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Teacher;
use App\Model\CourseDetail;

class CourseController extends Controller
{
    public function course_students(Teacher $teacher, Course $course)
    {
        $course_id = $course->id;
        $course_students = $course->students;
        return view('Courses.students', compact('course_students','course_id'));        
    }
    

    public function courseMaterials($id)
    {
        $course = Course::find($id);
        return view('home');
        dd($course->courseDetails()->get());
    }

    public function addMaterial(Request $request)
    {
        $courseDetails = new CourseDetail;
        $courseDetails->course_id = $request->course_id;
        $courseDetails->title = $request->title;
        $courseDetails->body = $request->body;
        $courseDetails->file_url = $request->url;
        $courseDetails->save();
    }
}

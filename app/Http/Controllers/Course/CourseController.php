<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseDetail;

class CourseController extends Controller
{
    public function courseStudents($id)
    {
        $course = Course::find($id);
        $students = $course->students()->get();
        return response()->json($students);
        
        dd($students);
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

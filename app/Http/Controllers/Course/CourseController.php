<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Teacher;
use App\Model\CourseDetail;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class CourseController extends Controller
{
    public function course_students( Course $course)
    {
        $course_id = $course->id;
        $course_students = $course->students;
        return view('Courses.students', compact('course_students','course_id'));        
    }
    

    public function courseMaterials($id)
    {
        $teacher_photo=Auth::User()->photo;

        $course = Course::find($id);
        $course_materials=$course->courseDetails;


        return view('Courses.course_material',compact('course_materials','id','teacher_photo'));
    }

    public function addMaterial(Request $request)
    {
        $courseDetails = new CourseDetail;
        $courseDetails->course_id = $request->course_id;
        $courseDetails->title = $request->title;
        $courseDetails->body = $request->body;
        $courseDetails->file_url = $request->url;
        $courseDetails->save();

       
        return $courseDetails;
    }

    public function editDescription(Request $request)
    {
        $teacher = Teacher::find($request->id);
        $teacher->description = $request->description;
        $teacher->save();
        return response()->json($teacher->description);
    }

    

    
}

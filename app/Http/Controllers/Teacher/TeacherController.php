<?php

namespace App\Http\Controllers\Teacher;

use Carbon\Carbon;
use App\Model\Grade;
use App\Model\Course;
use Firebase\JWT\JWT;
use App\Model\Lecture;
use GuzzleHttp\Client;
use App\Model\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Courses\CreateCourseRequest;
use App\Http\Requests\Lectures\CreateLectureRequest;



class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher')->except([]);
        $this->meeting_data = '';
    }

    public function profile()
    {
        $teacher = Auth::user();
        $teacher_subjects=$teacher->subject;
  
        $courses = $teacher->courses()->get();
        // get total of students assigned with this teacher
        $courses_id = $teacher->courses()->select('id')->get();
        $totalStudents = DB::table('courses_students')->whereIn('course_id',$courses_id)->count();
        //---------------------------
        return view('Teachers.profile', compact('teacher', 'courses','totalStudents','teacher_subjects'));
    }

    public function teacher_courses()
    {        
        $teacher_courses = Auth::User()->courses->all();
        return view('Teachers.courses', compact('teacher_courses'));
    }

    public function teacher_course_lectures($locale, Course $course)
    {
        
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SUNDAY));
        $end = date($now->endOfWeek(Carbon::THURSDAY));
        $course = Course::where('teacher_id', Auth::id())
        ->where('id', $course->id)->first();
        $course_lectures = $course->lectures->whereBetween('lecture_date', [$start, $end]);
        return view('Teachers.course_lectures', compact( 'course', 'course_lectures'));

    }

    public function add_new_lecture(CreateLectureRequest $request, Course $course)
    {
        $lecture = new Lecture();
        $lecture->name = $request->name;
        $lecture->lecture_date = $request->lecture_date;
        $lecture->course_id = $course->id;
        $this->meeting_data = $this->create_meeting();
        $lecture->meeting_name = $this->meeting_data->topic;
        $lecture->meeting_password = $request->meeting_password;
        $lecture->meeting_id = $this->meeting_data->id;
        $lecture->save();

        return redirect()->route('teacher.course.lectures', [$course->id]);
    }

    public function get_course_questions($locale, Course $course)
    {
        $course_questions = $course->questions;
        $teacher = Auth::id();
        return view('Teachers.course_questions', compact('teacher', 'course', 'course_questions'));
    }

    public function add_new_course($locale)
    {
           $teacher = Auth::User();
        $teacher_courses_grades = $teacher->courses->pluck('grade_id');
        $grades = Grade::whereNotIn('id', $teacher_courses_grades)->get();
        return view('Teachers.add-course', compact('grades'));
    }

    public function store_new_course(CreateCourseRequest $request)
    {

        $course = new Course();
        $course->name = $request->name;
        $course->teacher_id = Auth::id();
        $course->grade_id = $request->grade_id;
        $course->save();

        return redirect()->route('teachers.courses');
    }


    protected function generate_token()
    {
        //this function will create the jwt token for the zoom api authorization
        $zoom_api_key = 'aei7SOvRStmKoWHIXUaN1Q';
        $zoom_api_secret = 'jhDCXURIT2aC8QymaUlzrDd0dTarlPQkRyi6';

        $jwt_token = [
            'iss' => $zoom_api_key,
            'exp' => time() + 4000,
        ];

        return JWT::encode($jwt_token, $zoom_api_secret);
    }

    protected function create_meeting()
    {
        //this function will create a GuzzleHttp object to talk to the zoom api
        //then i will pass to it the meeting creation api and the token created and the json which includes the meeting name and password
        //then i will return the the Guzzle response
    
        $client = new Client(['base_uri' => 'https://api.zoom.us']);
        $response = $client->request('post', '/v2/users/me/meetings', [
            'headers' => [
                'Authorization' => 'Bearer '.$this->generate_token(),
            ],

            'json' => [
                'topic' => request('meeting_name'),
                'password' => request('meeting_password'),
                'settings' => [
                    'host_video' => true,
                    'join_before_host' => false,
                    'meeting_authentication' => false,
                    'mute_upon_entry' => true,
                    'participant_video' => false,
                ],
            ],

            
        ]);

        return json_decode($response->getBody());
        
    }


    public function show_schedule()
    {
      
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SUNDAY));
        $end = date($now->endOfWeek(Carbon::THURSDAY));
        $course = Course::where('teacher_id', Auth::id())->select('id')->get();
        $course_lectures = Lecture::whereIn('course_id',$course)->get();
        dd($course_lectures);
        return view('Teachers.course_lectures', compact( 'course', 'course_lectures'));


    }


    

}

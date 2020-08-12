<?php

namespace App\Http\Controllers\Student;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Lecture;
use App\Model\Course;
use App\Model\Student;
use App\Model\CourseDetail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Answers\CreateAnswerRequest;
use App\Http\Requests\Questions\CreateQuestionRequest;



class StudentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth:student')->except([]);
        $course_id_segment = $request->segment(3);
        $this->middleware('userValidCourse:'.$course_id_segment)->except(['profile', 'courses', 'all_courses_lectures']);
    }

    public function profile()
    {
        $student = Auth::User();
        $courses = $student->courses()->get();
        return view('Students.home', compact('student', 'courses'));
    }

    public function courses()
    {
        $student = Auth::User();
        $courses = $student->courses()->get();
        return view('Students.courses', compact('student', 'courses'));
    }

    public function course_materials(Course $course)
    {
            $id = $course->id;
            $course_materials = CourseDetail::where('course_id',$course->id)->get();
            return view('Students.course_materials', compact('student', 'course', 'id', 'course_materials'));
        
        
    }

    public function course_questions(Course $course)
    {
        $course_questions = Question::where('course_id',$course->id)->get();
        return view('Students.course_questions', compact('student', 'course', 'course_questions'));
    }

    public function course_lectures(Course $course)
    {
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SATURDAY));
        $end = date($now->endOfWeek(Carbon::FRIDAY));
        $course_lectures = $course->lectures->whereBetween('lecture_date', [$start, $end]);
        return view('Students.course_lectures', compact('course', 'course_lectures'));
    }

    public function all_courses_lectures(Course $course)
    {
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SATURDAY));
        $end = date($now->endOfWeek(Carbon::FRIDAY));
        $student_courses = Auth::User()->courses->pluck('id');
        $week_course_lectures = Lecture::whereIn('course_id', $student_courses)->whereBetween('lecture_date', [$start, $end])->get();
        return view('Students.week_course_lectures', compact('course', 'week_course_lectures'));
    }

    public function store_question(CreateQuestionRequest $request,Course $course)
    {
        $question = new Question;
        $question->title = $request->title;
        $question->course_id = $course->id;
        $question->student_id = Auth::id();
        $question->save();
        return back();
    }

    public function question_answers(Course $course, Question $question)
    {
        $answers = Answer::where('question_id',$question->id)->get();
        return view('Students.question_answers', compact('student', 'course', 'question', 'answers'));
    }

    public function studentQuestions($course_id,$student_id)
    {
        $questions = Question::where('course_id',$course_id)->where('student_id',$student_id)->orderBy("id", "DESC")->get();
        return response()->json($questions);
    }

    
    public function add_answer(CreateAnswerRequest $request, Course $course, Question $question)
    {
        $answer = new Answer;
        $answer->body = $request->body;
        $answer->question_id = $question->id;
        $answer->student_id = Auth::id();
        $answer->teacher_id = null;
        $answer->save();
        return back();
    }
    
}

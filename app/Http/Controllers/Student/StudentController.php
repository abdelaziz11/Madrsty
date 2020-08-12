<?php

namespace App\Http\Controllers\Student;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Course;
use App\Model\Student;
use App\Model\CourseDetail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Answers\CreateAnswerRequest;
use App\Http\Requests\Questions\CreateQuestionRequest;



class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student')->except([]);
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

    public function course_materials(Student $student, Course $course)
    {
        $course_materials = CourseDetail::where('course_id',$course->id)->get();
        return view('Students.course_materials', compact('student', 'course', 'course_materials'));
    }

    public function course_questions(Student $student, Course $course)
    {
        $course_questions = Question::where('course_id',$course->id)->get();
        return view('Students.course_questions', compact('student', 'course', 'course_questions'));
    }

    public function course_lectures(Student $student, Course $course)
    {
        $course_lectures = $course->lectures;
        return view('Students.course_lectures', compact('course', 'course_lectures'));
    }

    public function week_course_lectures(Student $student, Course $course)
    {
        $now = Carbon::now();
        $start = date($now->startOfWeek(Carbon::SATURDAY));
        $end = date($now->endOfWeek(Carbon::FRIDAY));
        $week_course_lectures = $course->lectures->whereBetween('lecture_date', [$start, $end]);
        return view('Students.week_course_lectures', compact('course', 'week_course_lectures'));
    }

    public function store_question(CreateQuestionRequest $request, Student $student, Course $course)
    {
        $question = new Question;
        $question->title = $request->title;
        $question->course_id = $course->id;
        $question->student_id = $student->id;
        $question->save();
        return back();
    }

    public function question_answers(Student $student, Course $course, Question $question)
    {
        $answers = Answer::where('question_id',$question->id)->get();
        return view('Students.question_answers', compact('student', 'course', 'question', 'answers'));
    }

    public function studentQuestions($course_id,$student_id)
    {
        $questions = Question::where('course_id',$course_id)->where('student_id',$student_id)->orderBy("id", "DESC")->get();
        // dd($questions);
        return response()->json($questions);
    }

    
    public function add_answer(CreateAnswerRequest $request, Student $student, Course $course, Question $question)
    {
        $answer = new Answer;
        $answer->body = $request->body;
        $answer->question_id = $question->id;
        $answer->save();
        return back();
    }
    
}

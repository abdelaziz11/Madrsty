<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Question;
use App\Model\Answer;


class StudentController extends Controller
{
    public function studentQuestions($course_id,$student_id)
    {
        $questions = Question::where('course_id',$course_id)->where('student_id',$student_id)->orderBy("id", "DESC")->get();
        // dd($questions);
        return response()->json($questions);
    }

    public function questionAnswers($question_id)
    {
        $answers = Answer::where('question_id',$question_id)->get();
        return response()->json($answers);
    }
}

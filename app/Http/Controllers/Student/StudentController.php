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
        $questions = Question::where('course_id',$course_id)->where('student_id',$student_id)->get();
        // $answers = $questions->answers()->get();
        return response()->json($questions);

        // dd($answers);
    }
}

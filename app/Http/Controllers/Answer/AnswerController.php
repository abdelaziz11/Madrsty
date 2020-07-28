<?php

namespace App\Http\Controllers\Answer;

use App\Model\Answer;
use App\Model\Teacher;
use App\Model\Course;
use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Answers\CreateAnswerRequest;

class AnswerController extends Controller
{
    public function index()
    {

    }

    public function store(CreateAnswerRequest $request, Teacher $teacher, Course $course, Question $question)
    {
        $answer = new Answer();
        $answer->body = $request->body;
        $answer->question_id = $course->id;
        $answer->save();

        return redirect()->back();
    }
}

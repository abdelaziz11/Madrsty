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

    public function store(CreateAnswerRequest $request, Question $question)
    {
        $answer = new Answer();
        $answer->body = $request->body;
        $answer->question_id = $question->id;
        $answer->save();

        return redirect()->back();
    }

    public function all_question_answers( Course $course, Question $question)
    {
        $question_answers = $question->answers;
        return view('Questions.all_answers', compact('course', 'question', 'question_answers'));
    }
}

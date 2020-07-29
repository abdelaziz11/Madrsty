@extends('layouts.front-end')

@section('title')
Course's Questions
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/courses-questions.css')}}">
@endsection

@section('content')
<div class="questions">
    <div class="container">
        <div class="content">
            
            <div class="row">
            @foreach($course_questions as $question)
                <div class="col-xl-10">
                    <div class="quest">
                    
                        <h4>{{ $question->title}}</h4>

                        <p>Asked By : <span> {{ $question->student->name }} </span>  From : <span> {{ $question->created_at->diffForHumans() }} </span>
                            <strong>
                                <a href="{{ route('question.answers', [$teacher->id, $course->id, $question->id]) }}" class="float-right">Show All Answers</a>
                            </strong>
                        </p>
                        <hr>
                        @if($question->get_first_answer())
                        <p>{{ $question->get_first_answer() }}</p>
                        @else
                        <strong style="color:red">No Answers Provided Yet!</strong>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="counter">
                        <span class="d-inline-block">{{$question->answers->count()}}</span>
                    </div>
                    <strong class="d-block mt-4">ANSWERS</strong>

                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>            
@section('scripts')

@endsection   
@endsection
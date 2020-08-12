

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
             @if($course_questions->isEmpty())
            <h4 style="text-align: center;">Empty</h4>
            @endif  
            <div class="row">
             
            @foreach($course_questions as $question)
                <div class="col-xl-10">
                    <div class="quest">
                    
                        <h4 class="wow flipInX">{{ $question->title}}</h4>

                        <p>Asked By : <span> {{ $question->student->name }} </span>  From : <span> {{ $question->created_at->diffForHumans() }} </span>
                            <strong class="">
                                <a href="{{ route('student.question.answers', [$student->id, $course->id, $question->id]) }}" class="float-right wow fadeIn">Show All Answers</a>
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
                    <div class="counter wow rollIn">
                        <span class="d-inline-block ">{{$question->answers->count()}}</span>
                    </div>
                    <strong class="d-block mt-4">ANSWERS</strong>

                </div>
            @endforeach
            </div>

            <br>
            <hr>
            <h4>Add New Question</h4>
            <form action="{{ route('student.question.store', [$student->id, $course->id]) }}" method="POST">
                @csrf
                @include('partials.errors')

                <div class="form-group">
                    <label for="">Question Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter You Question">
                </div>

                <button class="btn btn-primary">Add Question</button>
            </form>
        </div>
    </div>
</div>            
@section('scripts')

@endsection   
@endsection
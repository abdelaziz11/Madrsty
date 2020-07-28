@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Course <strong style="color:red">{{$course->name}}</strong> Questions
    </div>

    <div class="card-body">
        <ul class="list-group">
            @foreach($course_questions as $question)
                <li class="list-group-item">
                    <div>
                        Question: <strong>{{ $question->title }}</strong>
                    </div>

                    <div>
                        Question's Student: <strong>{{ $question->student->name }}</strong>
                    </div>

                    <div>
                        Question's Answers: 
                        @if($question->answers->count() == 0)
                            <div><strong style="color:red">No Answers Provided Yet!</strong></div>
                        @else
                            @foreach($question->answers as $answer)
                                <div><strong>{{ $answer->body }}</strong></div>
                            @endforeach
                        @endif
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Add New Answer
                        </div>

                        <div class="card-body">
                            <form action="{{ route('answer.store', [$course->teacher->id, $course->id, $question->id]) }}" method="POST">
                            @csrf
                            @include('partials.errors')

                            <div class="form-group">
                                <label for="">Answer: </label>
                                <input type="text" name="body" class="form-control">
                            </div>

                            <button class="btn btn-success btn-sm">Submit Answer</button>
                            </form>
                        </div>
                    </div>
                    
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@extends('layouts.front-end')

@section('title')
Question's Answers
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/all-answers.css')}}">
@endsection

@section('content')
<div class="answers">
    <div class="container">
        <div class="content">
                    <div class="card">
                        <div class="quest">
                            <h4>{{ $question->title }}</h4>
    
                            <p>Asked By : <span> {{ $question->student->name }} </span>  From : <span> {{ $question->created_at->diffForHumans() }} </span></p>
                            <hr>
                            @foreach($question_answers as $answer)
                                <div>{{ $answer->body }}</div>
                                <div>Answered By : <strong>{{ $answer->teacher_id != null ? $answer->teacher->name : $answer->student->name }}</strong></div>
                                <hr>
                            @endforeach    
                            <div class="form-group basic-textarea">
                                <form action="{{ route('answer.store', [$question->id]) }}" method="POST">
                                    @csrf
                                    @include('partials.errors')
                                    <textarea name="body" class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your answer here..."></textarea>
                                    <button class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">Send</button>
                                </form>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>   
@section('scripts')

@endsection   
@endsection
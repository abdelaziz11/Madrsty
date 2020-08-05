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
            <h4 style="text-align: center;">{{ __('site.empty') }}</h4>
            @endif  
            <div class="row">
             
            @foreach($course_questions as $question)
                <div class="col-xl-10">
                    <div class="quest">
                    
                        <h4>{{ $question->title}}</h4>

                        <p>{{ __('site.asked by') }} : <span> {{ $question->student->name }} </span>  {{ __('site.from') }} : <span> {{ $question->created_at->diffForHumans() }} </span>
                            <strong>
                                <a href="{{ route('question.answers', [app()->getLocale(), $question->id]) }}" class="float-right">{{ __('site.show all answers') }}</a>
                            </strong>
                        </p>
                        <hr>
                        @if($question->get_first_answer())
                        <p>{{ $question->get_first_answer() }}</p>
                        @else
                        <strong style="color:red">{{ __('site.no answers provided yet!') }}</strong>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="counter">
                        <span class="d-inline-block">{{$question->answers->count()}}</span>
                    </div>
                    <strong class="d-block mt-4">{{ __('site.answers') }}</strong>

                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>            
@section('scripts')

@endsection   
@endsection
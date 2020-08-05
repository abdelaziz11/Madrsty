@extends('layouts.front-end')

@section('title')
Add New Lecture
@endsection


@section('content')
<div class="card">
    <div class="card-header">
    {{ __('site.course') }} <strong style="color:red">{{ $course->name }}</strong> {{ __('site.lectures') }}
    </div>

    <div class="card-body" v-for="lecture in lectures">
        @if($course_lectures->isEmpty())
         <div>  
                 <strong>{{ __('site.empty') }}  </strong>
            </div>
        @endif
        @foreach($course_lectures as $lecture)
            <div>
                Lecture Name: <strong>{{ $lecture->name }}</strong>
            </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header">
            <strong>{{ __('site.add new lecture to course') }}</strong>
        </div>

        <div class="card-body">
        <form action="{{ route('teacher.create-lecture', [app()->getLocale(), $course->id]) }}" method="POST">
            @csrf
            @include('partials.errors')

            <div class="form-group">
                <label for="">{{ __('site.lecture name') }}: </label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">{{ __('site.lecture date') }}: </label>
                <input type="Date" class="form-control" name="lecture_date">
            </div>

            <div class="form-group">
                <label for="">{{ __('site.meeting name') }}: </label>
                <input type="text" class="form-control" name="meeting_name">
            </div>

            <div class="form-group">
                <label for="">{{ __('site.meeting password') }}: </label>
                <input type="text" class="form-control" name="meeting_password">
            </div>

            <button class="btn btn-success btn-s">{{ __('site.add lecture') }}</button>
        </form>
        </div>
    </div>
</div>

@endsection
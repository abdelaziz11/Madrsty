@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    Course <strong style="color:red">lectures</lectures>
    </div>

    <div class="card-body">
        @foreach($course_lectures as $lecture)
            <div>
                Course Name: <strong>{{ $course->name }}</strong>
            </div>

            <div>
                Lecture Name: <strong>{{ $lecture->name }}</strong>
            </div>
        @endforeach
    </div>
</div>
@endsection
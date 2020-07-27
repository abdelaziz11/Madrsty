@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Teacher Courses
    </div>

    <div class="card-body">
        @foreach($teacher_courses as $course)
            <div>Course Name: <strong>
                <a href="{{ route('teacher.course.lectures', [$course->teacher->id, $course->id]) }}">
                    {{ $course->name }}
                </a>
            </strong></div>
            <div>Course Grade: <strong>{{ $course->grade->name }}</strong></div>
        @endforeach
    </div>
</div>
@endsection
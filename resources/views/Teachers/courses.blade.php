@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Teacher Courses
    </div>

    <div class="card-body">
    <ul class="list-group">
        @foreach($teacher_courses as $course)
        <li class="list-group-item">
            <div>Course Name: <strong>
                {{ $course->name }}
            </strong>
            </div>
            <div>Course Grade: <strong>{{ $course->grade->name }}</strong></div>
            
            <div> <strong><a href="{{ route('teacher.course.lectures', [$course->teacher->id, $course->id]) }}" >
                Course Lectures
            </a>
            </strong>
            </div>
            
            <div><strong><a href="{{ route('teacher.course.questions', [$teacher->id, $course->id]) }}">Course Q&A</a></strong></div>
        </li>
        @endforeach
    </ul>
    </div>
</div>
@endsection
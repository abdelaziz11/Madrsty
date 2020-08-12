@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Student <strong>{{ $student->name }}</strong> Course: <strong style="color:red">{{ $course->name }}</strong>
            <a href="{{ route('student.course.lectures', [$student->id, $course->id]) }}" class="btn btn-success btn-sm">Course Lectures</a>
            <a href="{{ route('student.week.course.lectures', [$student->id, $course->id]) }}" class="btn btn-success btn-sm">Course Lectures This Week</a>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($course_materials as $material)
                    <li class="list-group-item">
                        <div>Course Title: <strong>{{ $material->title }}</strong></div>
                        <div>Course Body: <strong>{{ $material->body }}</strong></div>
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
@endsection
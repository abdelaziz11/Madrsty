@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Student Data
            <a href="{{ route('student.courses',$student->id) }}" class="btn btn-success btn-sm">Student Courses</a>
        </div>
        <div class="card-body">
            <div>Student Name: <strong>{{ $student->name }}</strong></div>
            <div>Student Courses: 
            @foreach($courses as $course)
                <strong>{{ $course->name }}</strong>, 
            @endforeach 
            </div>
        </div>
    </div>
@endsection
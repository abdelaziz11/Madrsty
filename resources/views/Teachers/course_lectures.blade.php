@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    Course <strong style="color:red">{{ $course->name }}</strong> lectures</lectures>
    </div>

    <div class="card-body" v-for="lecture in lectures">
        @foreach($course_lectures as $lecture)
            <div>
                Lecture Name: <strong>{{ $lecture->name }}</strong>
            </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Add New Lecture To Course</strong>
        </div>

        <div class="card-body">
        <form action="{{ route('teacher.create-lecture', [$course->teacher->id, $course->id]) }}" method="POST">
            @csrf
            @include('partials.errors')

            <div class="form-group">
                <label for="">Lecture Name: </label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Lecture Date: </label>
                <input type="datetime-local" class="form-control" name="lecture_date">
            </div>

            <button class="btn btn-success btn-s">Add Lecture</button>
        </form>
        </div>
    </div>
</div>

@endsection
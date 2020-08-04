@extends('layouts.front-end')

@section('title')
Add New Course
@endsection


@section('content')

<div class="container">
<div class="card" style="margin: 50px;">
   

    <div class="card-body">
        <form action="{{ route('teacher.course.store')}}" method="POST">
            @csrf
            @include('partials.errors')

            <div class="form-group">
                <label for="">Course Name: </label>
                <input type="name" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Grade: </label>
                <select name="grade_id" id="" class="form-control">
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success btn-s">Add Course</button>

        </form>
    </div>
</div>
</div>
@endsection
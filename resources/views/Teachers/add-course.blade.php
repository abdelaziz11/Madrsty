<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    Add New Course 
    </div>

    <div class="card-body">
        <form action="{{ route('teacher.course.store', Auth::id()) }}" method="POST">
=======
@extends('layouts.front-end')

@section('title')
{{ __('site.add new course') }}
@endsection


@section('content')

<div class="container">
<div class="card" style="margin: 50px;">
   

    <div class="card-body">
        <form action="{{ route('teacher.course.store', app()->getLocale())}}" method="POST">
>>>>>>> master
            @csrf
            @include('partials.errors')

            <div class="form-group">
<<<<<<< HEAD
                <label for="">Course Name: </label>
=======
                <label for="">{{ __('site.course name') }}: </label>
>>>>>>> master
                <input type="name" class="form-control" name="name">
            </div>

            <div class="form-group">
<<<<<<< HEAD
                <label for="">Grade: </label>
=======
                <label for="">{{ __('site.grade') }}: </label>
>>>>>>> master
                <select name="grade_id" id="" class="form-control">
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>

<<<<<<< HEAD
            <button class="btn btn-success btn-s">Add Course</button>
=======
            <button class="btn btn-success btn-s">{{ __('site.add course') }}</button>
>>>>>>> master

        </form>
    </div>
</div>
<<<<<<< HEAD
=======
</div>
>>>>>>> master
@endsection
@extends('layouts.front-end')

@section('title')
Course's Questions
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/teacher-courses.css')}}">
@endsection

@section('content')

    <div class="teacher-courses">
        <div class="container">
            <div class="row">
                
                @foreach($teacher_courses as $course)
                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin: 80px 0 100px 0;" >
                    </hr>
                    <!--Exemple card-->
                    <div class="maincontainer">

                        <div class="thecard">
                            
                            <div class="flip" >
                                
                                <!--Front card-->
                                <div class="thefront" ></div>
                                <!--Front card-->

                                <!--Back card-->
                                
                                <div class="theback">
                                    <div class="my-gradient radius-back"></div>
                                    <p class="textarea">{{ $course->name }} </p>
                                        <a href="{{ route('teacher.course.students', [$course->teacher->id, $course->id]) }}" class=" waves-effect waves-light ">students</a>                                                                
                                        <a class=" waves-effect waves-light  ">student courses</a>                                                                
                                        <a class=" waves-effect waves-light ">student material</a>                                                                
                                        <a class=" waves-effect waves-light " style="padding: 10px 20px;">posts</a>                                                                
                                    </div>
                                <!--/Back card-->
                            </div>  
                            <div class="top waves-effect waves-light">
                                <h3>{{ $course->name }}</h3>
                            </div>
                        </div>

                    </div>
                    <!-- ./Exemple card -->
                    </div>
                @endforeach
               
            </div>
        </div>
    </div>

    <!-- <script src="{{asset('/js/main.js')}}"></script> -->

@section('scripts')
    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.1.2/dist/jquery.flip.min.js"></script>

@endsection   
@endsection
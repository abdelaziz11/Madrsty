<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacer-courses</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/teacher-courses.css')}}">


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body>

    @include('partials.frontend-navbar')

=======
@extends('layouts.front-end')

@section('title')
Course's Questions
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/teacher-courses.css')}}">
<style type="text/css">
    .hvr-sweep-to-right {
        width: 100%;
        height: 50px;
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #2098D1;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-right:hover, .hvr-sweep-to-right:focus, .hvr-sweep-to-right:active {
  color: white;
}
.hvr-sweep-to-right:hover:before, .hvr-sweep-to-right:focus:before, .hvr-sweep-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}


</style>
@endsection

@section('content')
<div style="">
 <h3 style="text-align: center;margin:50px;font-weight: 400;">{{ __('site.my classroom') }}</h3>

</div>
>>>>>>> master
    <div class="teacher-courses">
        <div class="container">
            <div class="row">
                
                @foreach($teacher_courses as $course)
<<<<<<< HEAD
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
=======
     

                   <div class="col-sm">
     <div style="text-align: center;box-shadow:0px 4px 10px -1px rgba(151, 171, 187, 0.7),0 1px 3px 0 rgba(48,56,64,.12);margin-top: 30px;background: white;">
          <h3 style="font-size: 1rem;font-weight: 400;line-height: 1.5;" >{{ $course->name }}</h3>

                                   <ul style="text-align: left;list-style: none;width: 100%;margin-top: 30px;">
                                                                          <hr style="margin: 0px;">

                                     <li style="margin-top: 5px;">  <a class="hvr-sweep-to-right  " style="" href="{{ route('teacher.course.students', [app()->getLocale(), $course->id]) }}">{{ __('site.students') }}</a></li>
  
                                       <hr style="margin: 0px;">
                                      <li>  <a class="hvr-sweep-to-right  " style="margin-top: 5px;" href="{{route('teacher.course.lectures' , [app()->getLocale(), $course->id])}}">{{ __('site.lectures') }}</a></li>

                                                                              <hr style="margin: 0px;">

                                                                                                        
                                        <li><a class=" hvr-sweep-to-right " style="margin-top: 5px;" href="{{route('teacher.course.questions', [app()->getLocale(), $course->id])}}">{{ __('site.questions') }}</a></li>    
                                                                               <hr style="margin: 0px;">
                                                           
                                       <li> <a class="hvr-sweep-to-right  " href="{{route('teachers.courseMaterials',[app()->getLocale(), $course->id])}}" style="margin-top: 5px;">{{ __('site.course materials') }}</a> </li>           
                                  </ul>
     </div>

</div>
          @endforeach
>>>>>>> master
               
            </div>
        </div>
    </div>

<<<<<<< HEAD

    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.1.2/dist/jquery.flip.min.js"></script>
</body>
</html>
=======
    <!-- <script src="{{asset('/js/main.js')}}"></script> -->

@section('scripts')
    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.1.2/dist/jquery.flip.min.js"></script>

@endsection   
@endsection
>>>>>>> master

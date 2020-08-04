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
 <h3 style="text-align: center;margin:50px;font-weight: 400;">My Classroom</h3>

</div>
    <div class="teacher-courses">
        <div class="container">
            <div class="row">
                
                @foreach($teacher_courses as $course)
     

                   <div class="col-sm">
     <div style="text-align: center;box-shadow:0px 4px 10px -1px rgba(151, 171, 187, 0.7),0 1px 3px 0 rgba(48,56,64,.12);margin-top: 30px;background: white;">
          <h3 style="font-size: 1rem;font-weight: 400;line-height: 1.5;" >{{ $course->name }}</h3>

                                   <ul style="text-align: left;list-style: none;width: 100%;margin-top: 30px;">
                                                                          <hr style="margin: 0px;">

                                     <li style="margin-top: 5px;">  <a class="hvr-sweep-to-right  " style="" href="{{ route('teacher.course.students', [$course->id]) }}">Students</a></li>
  
                                       <hr style="margin: 0px;">
                                      <li>  <a class="hvr-sweep-to-right  " style="margin-top: 5px;" href="{{route('teacher.course.lectures' , [$course->id])}}">Lectures</a></li>

                                                                              <hr style="margin: 0px;">

                                                                                                        
                                        <li><a class=" hvr-sweep-to-right " style="margin-top: 5px;" href="{{route('teacher.course.questions', [$course->id])}}">Questions</a></li>    
                                                                               <hr style="margin: 0px;">
                                                           
                                       <li> <a class="hvr-sweep-to-right  " href="{{route('teachers.courseMaterials',[$course->id])}}" style="margin-top: 5px;">Course matrial</a> </li>           
                                  </ul>
     </div>

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
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


    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.1.2/dist/jquery.flip.min.js"></script>
</body>
</html>